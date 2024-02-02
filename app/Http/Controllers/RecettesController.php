<?php

namespace App\Http\Controllers;

use App\Models\recettes;
use App\Models\Categories;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        $recettes = recettes::all();
        return view('recettes.recettes', compact('categories','recettes'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $recette = recettes::create([
            'name'=> $request->input('name'),
            'description' => $request->input('description'),
            'ingredients' => $request->input('ingredients'),
            // 'image' => $imagePath,
            'categories_id' => $request->input('categoryId'),
        ]);
        return redirect('recettes')->with('Success');

    }

    /**
     * Display the specified resource.
     */
    public function show(recettes $recettes)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(recettes $recettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, recettes $recettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(recettes $recettes)
    {
        //
    }
}
