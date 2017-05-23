<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function settings(Request $request)
    {
        return view('settings.settings');
    }
}
