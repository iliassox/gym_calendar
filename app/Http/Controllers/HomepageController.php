<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\TableManager;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $sessions = Session::all();
        $days = Session::$days;
        $hours = Session::$hours;

        $finalArray = Session::orderedSessions($days, $sessions);

        $colors = TableManager::$colors;
        return view('index', compact('colors', 'finalArray', 'days', 'hours'));
    }
}
