<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Nutrient;
use Illuminate\Http\Request;

class NutrientsController extends Controller
{
    public function nutrients_index()
    {
        $nutrients = Nutrient::all();
        return view('pages.fertigation_nutrients', compact('nutrients'));
    }

    public function add_nutrients()
    {
        return view('pages.add_fertigation_nutrients');
    }

    public function insert_nutrients(Request $request)
    {
        $request->validate([
            's_no' => 'required|integer',
            'name' => 'required|string',
            'ca' => 'required|string',
            'k' => 'required|string',
            'mg' => 'required|string',
            'n' => 'required|string',
            'p' => 'required|string',
            'cost_per_kg' => 'required|string',
        ]);

        $fertigationNutrient = new Nutrient();
        $fertigationNutrient->s_no = $request->s_no;
        $fertigationNutrient->name = $request->name;
        $fertigationNutrient->ca = $request->ca;
        $fertigationNutrient->k = $request->k;
        $fertigationNutrient->mg = $request->mg;
        $fertigationNutrient->n = $request->n;
        $fertigationNutrient->p = $request->p;
        $fertigationNutrient->cost_per_kg = $request->cost_per_kg;

        $saved = $fertigationNutrient->save();

        if ($saved) {
            return redirect()->back()->with('Success', 'Fertigation Nutrient added successfully!');
        } else {
            return redirect()->back()->with('fail', 'Failed to add Fertigation Nutrient. Please try again.');
        }
    }
}
