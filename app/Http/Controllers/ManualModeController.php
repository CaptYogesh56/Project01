<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManualModeController extends Controller
{
    public function manual_index()
    {
        return view('pages.manual');
    }

    public function insert_manual(Request $request)
    {
        // return view('pages.manual');
    }
}
