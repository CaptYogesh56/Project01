<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValvesController extends Controller
{
    public function valves_index()
    {
        return view('pages.valves');
    }

    public function add_valves()
    {
        return view('pages.add_valves');
    }

    public function insert_valves(Request $request)
    {
        // code
    }
}
