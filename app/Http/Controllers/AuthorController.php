<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author; //Ruta del modelo a solicitar


class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors=Author::all(); //ELOQUENT
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $author=new Author();
        $author->name=$request->name;
        $author->nationality=$request->nationality;
        $author->birth_date=$request->birth_date;
        $author->save();
        return redirect()->route('authors.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index');
    }
}
