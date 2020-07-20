<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BookController;

class Book extends Model {
    protected $table = 'books';
    protected $fillable = ['nome', 'autor', 'ano_de_publicacao'];
}
