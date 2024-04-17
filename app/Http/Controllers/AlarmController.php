<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlarmController extends Controller
{
    public function alarm_index()
    {
        return view('pages.alarm');
    }

    public function insert_alarm(Request $request)
    {
        //insert code for insertion
    }
}
