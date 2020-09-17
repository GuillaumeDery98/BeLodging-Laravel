<?php

namespace App\Http\Controllers;

use App\Annonce;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $annonces = Annonce::orderBy('created_at', 'desc')->get();

        return view('home', compact('annonces'));
    }
}
