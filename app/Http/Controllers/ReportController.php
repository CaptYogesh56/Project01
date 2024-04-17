<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report_index()
    {
        return view('pages.report');
    }

    public function insert_report(Request $request)
    {
        // return view('pages.manual');
    }
}
