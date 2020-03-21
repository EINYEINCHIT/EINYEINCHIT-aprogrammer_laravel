<?php

namespace App\Http\Controllers;

use App\Category;
use App\Receipe;
use App\test;
use Illuminate\Http\Request;

class ReceipeController extends Controller
{

    public function __construct()
    {
        // except, only
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Receipe::where('author_id', auth()->id())->get();

        // retrieve current login user info -> auth()->user()
        // check if login or not => auth()->check()
        
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $category = Category::all();
        return view('create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);

        Receipe::create($validatedData + ['author_id' => auth()->id()]); // need to defined fillable in model

        flash('Receipe has created successfully!');
        return redirect("receipe");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        $this->authorize('view', $receipe);

        return view('show', compact('receipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        $this->authorize('view', $receipe);

        $category = Category::all();
        return view('edit', compact('receipe', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
        $this->authorize('view', $receipe);

        $validatedData = request()->validate([
            'name' => 'required',
            'ingredients' => 'required',
            'category' => 'required',
        ]);

        $receipe->update($validatedData); // need to defined fillable in model

        flash('Receipe has updated!');
        return redirect("receipe");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipe  $receipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        $this->authorize('view', $receipe);

        $receipe->delete();

        flash('Receipe has deleted!');
        return redirect("receipe");
    }
}
