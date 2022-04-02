<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Coach;
use App\Models\Session;
use App\Models\TableManager;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sessions = Session::all();
        $days = Session::$days;
        $hours = Session::$hours;

        $finalArray = Session::orderedSessions($days,$sessions);

        $colors = TableManager::$colors;
        return view('dashboard',compact('colors','finalArray','days','hours'));
    }
}
