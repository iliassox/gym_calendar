<?php

namespace App\Http\Controllers;

use App\Models\Session;
use App\Models\TableManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function index()
    {
        \session()->forget('coach');
        $sessions = DB::table('session')->where('pending','=',false)->get();
        $days = Session::$days;
        return view('index', compact( 'sessions', 'days'));
    }
}
