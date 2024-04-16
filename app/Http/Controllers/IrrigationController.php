<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IrrigationController extends Controller
{
    public function irrigation_index()
    {
        return view('pages.irrigation');
    }

    public function add_irrigation()
    {
        return view('pages.add_irrigation');
    }

    public function insert_irrigation(Request $request)
    {
        //insert code for insertion
    }
}
