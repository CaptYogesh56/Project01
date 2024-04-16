<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FertigationController extends Controller
{
    public function fertigation_index()
    {
        return view('pages.fertigation');
    }

    public function add_fertigation1()
    {
        return view('pages.add_fertigation1');
    }

    public function add_fertigation2()
    {
        return view('pages.add_fertigation2');
    }

    public function insert_fertigation(Request $request)
    {
        //insert code for insertion
    }
}
