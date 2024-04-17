<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function schedule_index()
    {
        return view('pages.schedule');
    }

    public function add_schedule()
    {
        return view('pages.add_schedule');
    }

    public function insert_schedule(Request $request)
    {
        // return view('pages.manual');
    }
}
