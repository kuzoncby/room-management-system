<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function name(Request $request)
    {
        $name = $request->name;
        $students = User::where('name', 'LIKE', '%' . $name . '%')->with('room')->get();
        return view('home', compact('students'));
    }

    public function room(Request $request)
    {
        $room = $request->room;
        $students = User::with(['room' => function ($qurey) use ($room) {
            $qurey->where('room', $room);
        }])->get();
        return view('home', compact('students'));
    }
}
