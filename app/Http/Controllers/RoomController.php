<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function student_filter(Request $request)
    {
        $name = $request->student;
        $users = User::where('name', $name)->get();
        return view('home', compact('users'));
    }

    public function room_filter(Request $request)
    {
        $name = $request->student;
        $users = User::where('name', $name)->get();
        return view('home', compact('users'));
    }
}
