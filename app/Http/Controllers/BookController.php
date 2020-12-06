<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBook;
use App\Models\Book;

class BookController extends Controller
{

    public function __construct(Request $request, Book $book) {
        $this->request = $request;
        $this->repository = $book;
    }

    public function index() {
        $book = Book::all();
        return view ('layouts.client.home', compact('book'));
    }

    public function search(Request $request) {
        $books = $this->repository->search($request->search);

        return view('layouts.client.home', compact('books'));
    }
}
