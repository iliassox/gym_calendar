<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Coach;
use App\Models\Room;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = Session::all();

        return view('pannel.sessions.index' , compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dates = Session::$date;
        $activities = Activity::all();
        $coaches = Coach::all();
        $rooms = Room::all();

        return view('pannel.sessions.create',compact('activities','coaches','rooms','dates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'startHour' => 'required|integer|between:9,19',
            'startMin' => 'required|integer|between:0,59',
            'endHour' => 'required|integer|between:9,20',
            'endMin' => 'required|integer|between:0,59'
        ]);

        $startHour = intval($request->startHour);
        $startMin = intval($request->startMin);
        $endHour = intval($request->endHour);
        $endMin = intval($request->endMin);

        if($startHour > $endHour){
            throw ValidationException::withMessages(['field_name' => 'This value is incorrect']);
        }

        if($startHour == $endHour){
            if($startMin > $endMin){
                throw ValidationException::withMessages(['time' => 'Starting time cant be after ending time']);
            }
        }

        if($startHour == '9'){
            $startHour = '0'.$startHour;
        }
        if($endHour == '9'){
            $endHour = '0'.$endHour;
        }
        if($startMin < 10){
            $startMin = '0'.$startMin;
        }
        if($endMin < 10){
            $endMin = '0'.$endMin;
        }

        Session::create([
            'day'=>$request->day,
            'hour'=>(($startHour).':'.($startMin)),
            'end'=>(($endHour).':'.($endMin)),
            'coach_id'=>$request->coachID,
            'room_id'=>$request->roomID,
            'activity_id'=>$request->activityID
        ]);

        return redirect()->route('sessions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dates = Session::$date;
        $session = Session::find($id);
        $activities = Activity::all();
        $coaches = Coach::all();
        $rooms = Room::all();

        return view('pannel.sessions.edit', compact('session','activities','coaches','rooms','dates'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $session = Session::find($id);

        $request->validate([
            'startHour' => 'required|integer|between:9,19',
            'startMin' => 'required|integer|between:0,59',
            'endHour' => 'required|integer|between:9,20',
            'endMin' => 'required|integer|between:0,59'
        ]);

        $startHour = intval($request->startHour);
        $startMin = intval($request->startMin);
        $endHour = intval($request->endHour);
        $endMin = intval($request->endMin);

        if($startHour > $endHour){
            throw ValidationException::withMessages(['field_name' => 'This value is incorrect']);
        }

        if($startHour == $endHour){
            if($startMin > $endMin){
                throw ValidationException::withMessages(['time' => 'Starting time cant be after ending time']);
            }
        }

        if($startHour == '9'){
            $startHour = '0'.$startHour;
        }
        if($endHour == '9'){
            $endHour = '0'.$endHour;
        }
        if($startMin < 10){
            $startMin = '0'.$startMin;
        }
        if($endMin < 10){
            $endMin = '0'.$endMin;
        }


        $session->update([
            'day'=>$request->day,
            'hour'=>(($startHour).':'.($startMin)),
            'end'=>(($endHour).':'.($endMin)),
            'coach_id'=>$request->coachID,
            'room_id'=>$request->roomID,
            'activity_id'=>$request->activityID
        ]);

        return redirect()->route('sessions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Session::find($id)->delete();

        return redirect()->route('sessions.index');
    }
}
