<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BookController;

class Book extends Model {
    protected $table = 'books';
    protected $fillable = ['nome', 'autor', 'ano_de_publicacao'];


    public function search($search = null) {
        $results = $this->where(function ($query) use ($search){
            if($search) {
                $query->where('nome', 'LIKE', "%{ $search }%");
            }
        })->paginate();

        return $results;
    }
}
