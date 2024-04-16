<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AutomationController extends Controller
{
    public function automation_mode1()
    {
        return view('pages.automation_mode1');
    }

    public function automation_mode2()
    {
        return view('pages.automation_mode2');
    }

    public function automation_mode3()
    {
        return view('pages.automation_mode3');
    }

    public function automation_mode4()
    {
        return view('pages.automation_mode4');
    }

    public function insert_automation(Request $request)
    {
        //insert code for insertion
    }
}
