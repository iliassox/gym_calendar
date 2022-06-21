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
        \session()->forget('coach');
        $sessions = DB::table('session')->where('pending','=',false)->get();
        $days = Session::$days;
        return view('dashboard',compact('sessions','days'));
    }
}
