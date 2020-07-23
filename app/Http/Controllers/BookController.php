<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{

    public function index() {
        $book = Book::all();
        return view ('listar', compact('book'));
    }


    public function create()
    {
        return view('cadastro');
    }

    public function store(Request $request) {
        $book = new Book;
        $book->nome = $request->nome;
        $book->autor = $request->autor;
        $book->ano_de_publicacao = $request->ano_de_publicacao;
        $book->save();       

        return redirect()->route('book.index');
    }

    public function show($id) {
        $book = Book::findOrFail($id);
        return view ('show', compact('book'));
    }


    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view ('edit', compact('book'));
    }


    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('book.index');
        
    }

    public function destroy($id) {
        Book::find($id)->delete();
        return redirect()->route('book.index');
    }
}
