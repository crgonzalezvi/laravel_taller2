<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorApiController extends Controller
{
    public function index()
    {
        $authors=Author::all(); //ELOQUENT
        return $authors;
    }
    public function show(string $id){
        $authors= Author::find($id);
        return response()->json($authors);
    }
    public function store(Request $request){
        $author=new Author();
        $author->name=$request->name;
        $author->nationality=$request->nationality;
        $author->birth_date=$request->birth_date;
        $author->save();
        return response()->json($author);

    }
    public function update(Request $request, string $id)
    {
        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->nationality = $request->nationality;
        $author->birth_date = $request->birth_date;
        $author->save();
        return response()->json($author);
    }
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return response()->json($author);
    }
    public function colomb(Request $request){
        $nationality=$request->nationality;
        $author = Author::where('nationality',$nationality)->get();

        return response()->json($author);
    }
}
