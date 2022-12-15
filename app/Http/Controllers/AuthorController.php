<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthorController extends Controller
{



     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author :: all();
        return view('authors.index',['authors' =>$authors], compact('authors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        return view ('authors.showauthors',compact('author'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.createauthor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =[
            'id'=> 'required',
            'penulis'=> 'required|max:255'

        ];

        $validated =$request->validate($rules);

        Author::create($validated);

        $request->session()->flash('success', "Successfully adding {$validated['penulis']}!");
        return redirect()->route('authors.showauthors');

        return "Buku baru yang berjudul sudah disimpan.";
    }
}
