<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function get_one_room(Request $request, $room)
    {
        $room = Room::where('room', $room)->with('user')->first();
        return view('room.room', compact('room'));
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
