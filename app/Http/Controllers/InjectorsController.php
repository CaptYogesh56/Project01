<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Injector;
use Illuminate\Http\Request;

class InjectorsController extends Controller
{
    public function injectors_index()
    {
        $injectors = Injector::all();
        return view('pages.injectors', compact('injectors'));
    }

    public function add_injectors()
    {
        return view('pages.add_injectors');
    }

    public function insert_injectors(Request $request)
    {
        $request->validate([
            's_no' => 'required|integer',
            'tank_name' => 'required|string',
            'tank_type' => 'required|string',
            'flow_sensor_id' => 'required|string',
        ]);

        $injector = new Injector();
        $injector->s_no = $request->s_no;
        $injector->tank_name = $request->tank_name;
        $injector->tank_type = $request->tank_type;
        $injector->flow_sensor_id = $request->flow_sensor_id;

        if ($injector->save()) {
            return redirect()->back()->with('Success', 'Injector details saved successfully!');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong!');
        }
    }
}
