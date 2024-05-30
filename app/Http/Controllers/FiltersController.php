<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Filter;
use Illuminate\Http\Request;


class FiltersController extends Controller
{
    public function filter_index()
    {
        $filters = Filter::all();
        return view('pages.filters', compact('filters'));
    }

    public function add_filter()
    {
        return view('pages.add_filters');
    }

    public function insert_filter(Request $request)
    {
        $request->validate([
            's_no' => 'required|integer',
            'line_id' => 'required|string',
            'name' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'interval' => 'required|integer',
        ]);

        $filter = new Filter();
        $filter->s_no = $request->s_no;
        $filter->line_id = $request->line_id;
        $filter->name = $request->name;
        $filter->start_time = $request->start_time;
        $filter->end_time = $request->end_time;
        $filter->interval = $request->interval;

        if ($filter->save()) {
            return redirect()->back()->with('Success', 'Filter details saved successfully!');
        } else {
            return redirect()->back()->with('fail', 'Something went wrong!');
        }
    }
}
