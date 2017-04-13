<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;

class ApiRoomController extends Controller
{
    public function get_all_users(Request $request)
    {
        return User::with('room')->get();
    }

    public function get_all_rooms(Request $request)
    {
        return Room::with('user')->get();
    }

    public function get_one_room(Request $request, $room_number)
    {
        return Room::where('room', $room_number)->with('user')->get();
    }
}
