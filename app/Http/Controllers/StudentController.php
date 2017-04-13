<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(Request $request)
    {

    }

    /**
     * Get one user by username
     * @param $username
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function get_one_user($username)
    {
        $user = User::where('username', $username)->with('room')->first();
        return view('student.student', compact('user'));
    }

    public function delete(Request $request)
    {

    }

    public function save(Request $request)
    {

    }
}
