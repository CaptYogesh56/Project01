<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Razorpay\Api\Api;

class RazorpayController extends Controller
{
    public function alarm_index()
    {
        $api = new Api (env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        return view('pages.alarm');
    }

    public function insert_alarm(Request $request)
    {
        //insert code for insertion
    }
}
