<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Coach;
use App\Models\Room;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class CoachRequestController extends Controller
{
    public function request(){

        \session()->forget('coach');

        return view('coach_request.authentification');
    }

    public function index(){

        $coach = session('coach');

        if($coach == null){
            App::abort(404);
        }else{
            $sessions = DB::table('session')->where('coach_id',$coach)->where('pending','=','1')->get();
            $coach = Coach::find($coach);
            return view('coach_request.index',compact('coach','sessions'));
        }
    }

    public function create(){

        $coachId = session('coach');
        if($coachId == null){
            App::abort(404);
        }else {
            $coach = Coach::find($coachId);

            $dates = Session::$date;
            $activities = Activity::all();
            $rooms = Room::all();

            return view('coach_request.form', compact('coach', 'activities', 'rooms', 'dates'));
        }
    }

    public function Validating(Request $request){

        $coach = DB::table('coach')->where('email',$request->email)->where('code','=',$request->code)->first();

        if($coach == null){
            throw ValidationException::withMessages(['MailPassword' => 'Email or code are incorrect']);
        }

        session(['coach' => $coach->id]);

        return redirect()->route('RequestedIndex');

    }

    public function validation(Request $request){

        $coach = session('coach');

        if($coach == null){
            App::abort(404);
        }else {

            $request->validate([
                'activityID' => 'required',
                'coachID' => 'required',
                'roomID' => 'required',
                'startHour' => 'required|integer|between:9,19',
                'startMin' => 'required|integer|between:0,59',
                'endHour' => 'required|integer|between:9,20',
                'endMin' => 'required|integer|between:0,59'
            ]);

            $startHour = intval($request->startHour);
            $startMin = intval($request->startMin);
            $endHour = intval($request->endHour);
            $endMin = intval($request->endMin);

            if ($startHour > $endHour) {
                throw ValidationException::withMessages(['time' => 'Starting time cant be after ending time']);
            }

            if ($startHour == $endHour) {
                if ($startMin > $endMin) {
                    throw ValidationException::withMessages(['time' => 'Starting time cant be after ending time']);
                }
            }

            if ($startHour == '9') {
                $startHour = '0' . $startHour;
            }
            if ($endHour == '9') {
                $endHour = '0' . $endHour;
            }
            if ($startMin < 10) {
                $startMin = '0' . $startMin;
            }
            if ($endMin < 10) {
                $endMin = '0' . $endMin;
            }

            $hour = (($startHour) . ':' . ($startMin));

            $end = (($endHour) . ':' . ($endMin));

            Session::create([
                'day' => $request->day,
                'hour' => $hour,
                'end' => $end,
                'pending' => '1',
                'coach_id' => $coach,
                'room_id' => $request->roomID,
                'activity_id' => $request->activityID
            ]);
            return redirect()->route('RequestedIndex');
        }
    }

    public function delete($sessionId){

        $coach = session('coach');

        if($coach == null){
            App::abort(404);
        }else {
            Session::find($sessionId)->delete();

            return redirect()->route('RequestedIndex');
        }
    }

    public function logout(){
        \session()->flush();
        return redirect()->route('homepage');
    }

    public function pendingIndex(){

        $sessions = DB::table('session')->where('pending',"=",'1')->get();

        return view('coach_request.admin_index',compact('sessions'));

    }

    public function pendingAccept($id){

        $session = Session::find($id);

        $sessions = DB::table('session')->where('day',$session->day)->where('pending','=',0)->get();

        SessionController::extracted($sessions,$session->hour,$session->end);

        $session->update([
            'pending'=>'0'
        ]);

        return redirect()->route('pendingIndex');
    }

    public function pendingDelete($id){

        $session = Session::find($id);

        $session->delete();

        return redirect()->route('pendingIndex');
    }
}
