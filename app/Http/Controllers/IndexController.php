<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FilterRequest;
use App\Annonce;



class IndexController extends Controller
{
    public function all()
    {
        $annonces = Annonce::all();
        return view('index', compact('annonces'));
    }
    public function filtered(FilterRequest $request)
    {
        $filter = $request->all();
        session(['_old_input' => $request->input()]);
        return view('index')->with('filter', $filter);
    }
}
