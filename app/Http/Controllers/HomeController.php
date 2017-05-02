<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->status) {
            Auth::logout();
        }

        if (Auth::user()->type == 'A') {
            return view('home');
        } else {
            return redirect('/user/' . Auth::user()->username);
        }
    }
}
