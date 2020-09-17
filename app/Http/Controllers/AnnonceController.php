<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use App\Models\Category;
use App\Models\Duration;
use App\Http\Requests\AnnonceRequest;
use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $durations = Duration::all();

        return view('createAnnonce', compact('categories', 'durations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnnonceRequest $annonceRequest)
    {
        Annonce::create($annonceRequest->all());

        return redirect()->route('home')->with('message', "L'annonce à bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Annonce $annonce)
    {
        $category = $annonce->category->name;
        $duration = $annonce->duration->name;

        return view('showAnnonce', compact('annonce', 'category', 'duration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Annonce $annonce)
    {
        $categories = Category::all();
        $durations = Duration::all();

        return view('editAnnonce', compact('annonce', 'durations', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnnonceRequest $annonceRequest, Annonce $annonce)
    {
        //$annonce->update($AnnonceRequest->all());
        $annonce->update($annonceRequest->all());

        return redirect()->route('home')->with('message', "L'annonce a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Annonce $annonce)
    {
        $annonce->delete();

        return redirect()->route('home')->with('message', "L'annonce a bien été supprimée.");
    }
}
