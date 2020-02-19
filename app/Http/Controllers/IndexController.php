<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\FilterRequest;
use App\{Annonce, Category, Duration};



class IndexController extends Controller
{
    public function all()
    {
        $annonces = Annonce::paginate(9);
        $categories = Category::all();
        $durations = Duration::all();
        return view('index', compact('annonces', 'categories', 'durations'));
    }
    public function filtered(FilterRequest $request)
    {

        $filter = $request->all();
        $annonces = Annonce::where('city', '=', $request->postal)
            ->where('price', ">=", $request->prixmin)
            ->where('price', "<=", $request->prixmax)
            ->where('duration_id', ">=", $request->duree)
            ->where('category_id', ">=", $request->type)
            ->paginate(9);
        $categories = Category::all();
        $durations = Duration::all();
        session(['_old_input' => $request->input()]);
        return view('index', compact('annonces', 'categories', 'durations', 'filter'));
    }
}
