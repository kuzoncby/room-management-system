<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use Illuminate\Http\Request;

class ApiRoomController extends Controller
{
    /**
     * Get all users with room
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function get_all_users(Request $request)
    {
        return User::with('room')->get();
    }

    /**
     * Get one user with room
     * @param Request $request
     * @param $username
     * @return mixed
     */
    public function get_one_user(Request $request, $username)
    {
        return User::where('username', $username)->with('room')->first();
    }

    /**
     * Get all rooms with users
     * @param Request $request
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function get_all_rooms(Request $request)
    {
        return Room::with('user')->get();
    }

    /**
     * Get users in one room
     * @param Request $request
     * @param $room_number
     * @return mixed
     */
    public function get_one_room(Request $request, $room_number)
    {
        return Room::where('room', $room_number)->with('user')->first();
    }

    /**
     * @param Request $request
     */
    public function set_quota(Request $request)
    {
        $room = Room::find($request->id);   // 读取对应房间
        $room->save($request);  // 保存到MariaDB
    }
}
