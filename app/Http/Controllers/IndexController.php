<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

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
        return view('index')->with('filter', $filter);
    }
}
