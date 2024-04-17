<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FiltersController extends Controller
{
    public function filter_index()
    {
        return view('pages.filters');
    }

    public function add_filter()
    {
        return view('pages.add_filters');
    }

    public function insert_filter(Request $request)
    {
        // code
    }
}
