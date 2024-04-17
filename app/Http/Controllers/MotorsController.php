<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MotorsController extends Controller
{
    public function motors_index()
    {
        return view('pages.motors');
    }

    public function add_motors()
    {
        return view('pages.add_motors');
    }

    public function insert_motors(Request $request)
    {
        // code
    }
}
