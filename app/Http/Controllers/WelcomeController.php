<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    public function welcome(Request $request)
    {
        $ip = $this->getRealUserIp();
        Log::info('Client IP -> ' . $ip);
        return view('welcome');
    }

    /*
    * Get read user IP
    */
    function getRealUserIp()
    {
        switch (true) {
            case (!empty($_SERVER['HTTP_X_REAL_IP'])) :
                return $_SERVER['HTTP_X_REAL_IP'];
            case (!empty($_SERVER['HTTP_CLIENT_IP'])) :
                return $_SERVER['HTTP_CLIENT_IP'];
            case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) :
                return $_SERVER['HTTP_X_FORWARDED_FOR'];
            default :
                return $_SERVER['REMOTE_ADDR'];
        }
    }
}
