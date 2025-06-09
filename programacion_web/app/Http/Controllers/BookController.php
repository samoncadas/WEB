<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('welcome')->with('books', $books); #with recibe una clave un valor respectivamente
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        $book = new Book;
        $book->title = $request->titulo;#izquierda igual = bases de datos. derecha igual = vista
        $book->author = $request->autor;
        $book->price = $request->precio;
        $book->save();
        return redirect()->route('books.index');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $book = Book::find($id);
        return view('edit')->with('book', $book);
    }


    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->titulo;#izquierda igual = bases de datos. derecha igual = vista
        $book->author = $request->autor;
        $book->price = $request->precio;
        $book->save();
        return redirect()->route('books.index');
    }


    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect()->route('books.index');
    }
}
