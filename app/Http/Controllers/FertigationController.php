<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fertigation;

class FertigationController extends Controller
{
    public function fertigation_index()
    {
        $fertigation = Fertigation::all();

        return view('pages.fertigation', compact('fertigation'));
        // return view('pages.fertigation');
    }

    public function add_fertigation1()
    {
        return view('pages.add_fertigation1');
    }

    public function add_fertigation2()
    {
        return view('pages.add_fertigation2');
    }

    public function insert_fertigation(Request $request)
    {
        $request->validate([
            'program_name' => 'required|string',
            'select_valves' => 'required|string',
            'total_area' => 'required|string',
            'required_water' => 'required|string',
            'pre_water_ph' => 'required|string',
            'post_water_ph' => 'required|string',
            'fertigation_water_ph' => 'required|string',
            'tank_sequence' => 'required',
            'tank_a' => 'nullable|string',
            'tank_b' => 'nullable|string',
            'tank_c' => 'nullable|string',
        ]);

        // Create a new instance of the Fertigation model
        $fertigation = new Fertigation();

        // Assign the request data to model attributes
        $fertigation->program_name = $request->program_name;
        $fertigation->select_valves = $request->select_valves;
        $fertigation->total_area = $request->total_area;
        $fertigation->required_water = $request->required_water;
        $fertigation->pre_water_ph = $request->pre_water_ph;
        $fertigation->post_water_ph = $request->post_water_ph;
        $fertigation->fertigation_water_ph = $request->fertigation_water_ph;
        $fertigation->tank_sequence = $request->tank_sequence; // Checkbox handling
        $fertigation->tank_a = $request->tank_a;
        $fertigation->tank_b = $request->tank_b;
        $fertigation->tank_c = $request->tank_c;

        // Save the model data into the database
        $save = $fertigation->save();

        if($save)
        {
            return redirect()->back()->with('Success', 'Irrigation details created successfully!');
        }
        else
        {
            return redirect()->back()->with('fail', 'Something went wrong!!!');
        }
    }
}
