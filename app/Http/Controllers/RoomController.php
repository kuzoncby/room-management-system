<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function all_rooms(Request $request)
    {
        return view('test.rooms');
    }

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
