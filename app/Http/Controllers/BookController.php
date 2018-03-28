<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\Author;
use App\Http\Requests\CreateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::orderBy('title', 'asc')->get();
      return view('book.index')->with('books',$books);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $authors = Author::orderBy('surname', 'asc')->get();
      // niestety urzyłem sqlite więc nie mogłem imię i nazwisko połączyć poprzez CONCAT - po migracji na normalną bazę ZMIENIĆ tu i w widoku
      // DB::table('authors')->select("id", "CONCAT(name,' ',surname) as fullname")->get();
      // dodać use DB; - namespace
      return view('book.create')->with('authors',$authors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBookRequest $request)
    {
      Book::create($request->all());
      return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
      $authors = Author::orderBy('surname', 'asc')->get();
      return view('book.edit')->with(compact('authors','book'));;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBookRequest $request, Book $book)
    {
      $book = Book::findOrFail($book->id);
      $book->update($request->all());
      return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
