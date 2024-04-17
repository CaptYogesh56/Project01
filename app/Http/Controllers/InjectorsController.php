<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InjectorsController extends Controller
{
    public function injectors_index()
    {
        return view('pages.injectors');
    }

    public function add_injectors()
    {
        return view('pages.add_injectors');
    }

    public function insert_injectors(Request $request)
    {
        // code
    }
}
