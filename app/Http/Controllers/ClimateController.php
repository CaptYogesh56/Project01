<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClimateController extends Controller
{
    public function climate_control_index()
    {
        return view('pages.climate_control');
    }

    public function add_climate_control()
    {
        return view('pages.add_climate_control');
    }

    public function insert_climate_control(Request $request)
    {
        //insert code for insertion
    }
}
