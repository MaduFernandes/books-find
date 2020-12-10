<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBook;
use App\Models\Book;

class BookController extends Controller
{


    public function index() {
        $book = Book::all();
        return view ('crud.index', compact('book'));
    }


    public function create() {
        return view('crud.create');
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
        return view ('crud.show', compact('book'));
    }


    public function edit($id) {
        $book = Book::findOrFail($id);
        return view ('crud.edit', compact('book'));


    public function search(Request $request) {
        $books = $this->repository->search($request->search);


    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('book.index');

    }

    public function destroy($id) {
        Book::find($id)->delete();
        return redirect()->route('book.index');

    }
}
