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
        return view('index', compact( 'sessions', 'days'));
    }
}
