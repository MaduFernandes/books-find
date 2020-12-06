<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\StoreBook;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return view ('layouts.admin.admin-home', compact('book'));
    }

    public function create() {
        return view ('layouts.admin.admin-create');
    }

    public function store(StoreBook $request) {

        $book = new Book;
        $book->nome = $request->nome;
        $book->autor = $request->autor;
        $book->ano_de_publicacao = $request->ano_de_publicacao;
        $book->save();

        return redirect()->route('admin.index');
    }

    public function show($id) {
        $book = Book::findOrFail($id);
        return view ('layouts.admin.admin-show', compact('book'));
    }


    public function edit($id) {
        $book = Book::findOrFail($id);
        return view ('layouts.admin.admin-edit', compact('book'));
    }


    public function update(Request $request, $id) {
        $book = Book::find($id);
        $book->update($request->all());
        return redirect()->route('admin.index');

    }

    public function destroy($id) {
        Book::find($id)->delete();
        return redirect()->route('admin.index');
    }
}
