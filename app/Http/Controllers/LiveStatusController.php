<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Live;
use Illuminate\Http\Request;


class LiveStatusController extends Controller
{
    public function index()
    {
        $arr = ['1' => 'One', '2' => 'Two'];
        
        $l = new Live();
        $b = $l::all();
        $data = compact('arr', 'b');
        $data['user'] = "DONFON";
        return view('pages.live-status', $data);
    }
        
}

