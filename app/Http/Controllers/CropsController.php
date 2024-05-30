<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Crop;
use Illuminate\Http\Request;


class CropsController extends Controller
{
    public function crops_index()
    {
        $crops = Crop::all();
        return view('pages.crops', compact('crops'));
    }

    public function add_crops()
    {
        return view('pages.add_crops');
    }

    public function insert_crops(Request $request)
    {
        $request->validate([
            's_no' => 'required|integer',
            'crop_name' => 'required|string',
            'crop_stage' => 'required|string',
            'ca' => 'required|string',
            'k' => 'required|string',
            'mg' => 'required|string',
            'n' => 'required|string',
            'p' => 'required|string',
        ]);

        $crop = new Crop();
        $crop->s_no = $request->s_no;
        $crop->crop_name = $request->crop_name;
        $crop->crop_stage = $request->crop_stage;
        $crop->ca = $request->ca;
        $crop->k = $request->k;
        $crop->mg = $request->mg;
        $crop->n = $request->n;
        $crop->p = $request->p;

        $saved = $crop->save();

        if ($saved) {
            return redirect()->back()->with('Success', 'Crop added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add crop. Please try again.');
        }
    
    }
}
