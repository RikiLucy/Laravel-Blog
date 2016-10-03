<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Id_categorie extends Model
{
    static public function getCategories(){
        $categories = Id_categorie::orderBy('id', 'desc')->get();
        return $categories;

    }
}
