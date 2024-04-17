<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TanksController extends Controller
{
    public function tanks_index()
    {
        return view('pages.tanks');
    }

    public function add_tanks()
    {
        return view('pages.add_tanks');
    }

    public function insert_tanks(Request $request)
    {
        // code
    }
}
