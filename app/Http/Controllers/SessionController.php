<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Coach;
use App\Models\Room;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        $days = Session::$days;
        $hours = Session::$hours;
        $activities = Activity::all();
        $coaches = Coach::all();
        $rooms = Room::all();

        return view('pannel.sessions.create',compact('activities','coaches','rooms','days','hours'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'hour' => ['required',Rule::in(Session::$hours)],
            'day' => ['required',Rule::in(Session::$days)]

        ])->validated();

        Session::create([
            'day'=>$request->day,
            'hour'=>$request->hour,
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
        $hours = Session::$hours;
        $days = Session::$days;
        $session = Session::find($id);
        $activities = Activity::all();
        $coaches = Coach::all();
        $rooms = Room::all();

        return view('pannel.sessions.edit', compact('session','activities','coaches','rooms','days','hours'));
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

        $validator = Validator::make($request->all(), [
            'hour' => ['required',Rule::in(Session::$hours)],
            'day' => ['required',Rule::in(Session::$days)]

        ])->validated();

        $session->update([
            'day'=>$request->day,
            'hour'=>$request->hour,
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
