<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CropsController extends Controller
{
    public function crops_index()
    {
        return view('pages.crops');
    }

    public function add_crops()
    {
        return view('pages.add_crops');
    }

    public function insert_crops(Request $request)
    {
        // code
    }
}
