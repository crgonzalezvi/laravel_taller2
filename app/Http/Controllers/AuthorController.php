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
        $authors = Author::all();
        return view('authors.index', compact('authors')); //compact('authors') -> los datos creados en la variable
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
        $author = new Author();
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $author = new Author();
        $author = Author::find($id);

        if ($author) {
            $author->delete();
            return redirect()->route('authors.index');
        }
    }
}
