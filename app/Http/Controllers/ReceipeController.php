<?php

namespace App\Http\Controllers;

use App\User;
use App\Receipe;
use App\Category;
use Illuminate\Http\Request;
use App\Events\ReceipeCreatedEvent;
use App\Notifications\ReceipeStoredNotification;

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
        // $user = User::find(2);
        // $user->notify(new ReceipeStoredNotification());
        // echo("sent notification");
        // exit();

        $data = Receipe::where('author_id', auth()->id())->paginate(5);      

        return view('receipe.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        $category = Category::all();

        return view('receipe.create', compact('category'));
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
            'description' => 'required',
        ]);

        $receipe = Receipe::create($validatedData + ['author_id' => auth()->id()]); // need to defined fillable in model

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

        return view('receipe.show', compact('receipe'));
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
        
        return view('receipe.edit', compact('receipe', 'category'));
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

        return redirect("receipe");
    }
}
