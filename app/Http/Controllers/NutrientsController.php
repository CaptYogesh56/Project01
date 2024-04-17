<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NutrientsController extends Controller
{
    public function nutrients_index()
    {
        return view('pages.fertigation_nutrients');
    }

    public function add_nutrients()
    {
        return view('pages.add_fertigation_nutrients');
    }

    public function insert_nutrients(Request $request)
    {
        // code
    }
}
