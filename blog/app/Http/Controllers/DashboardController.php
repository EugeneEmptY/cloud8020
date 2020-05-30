<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cars;
use App\User;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver = auth()->user()->id;
        $driver_name = User::find($driver);
        return view('/dashboard')->with('cars', $driver_name->cars);
    }
}
