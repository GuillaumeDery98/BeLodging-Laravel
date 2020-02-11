<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FilterRequest;



class IndexController extends Controller
{
    public function all()
    {
        return view('index');
    }
    public function filtered(FilterRequest $request)
    {
        $filter = $request->all();
        session(['_old_input' => $request->input()]);
        return view('index')->with('filter', $filter);
    }
}
