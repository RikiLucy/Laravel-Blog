<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    static public function getCategories(){
        $categories = Category::orderBy('id', 'desc')->get();
        return $categories;

    }
}
