<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function general_index()
    {
        return view('pages.general');
    }

    public function insert_general(Request $request)
    {
        //insert code for insertion
    }
}
