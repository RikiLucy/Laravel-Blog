<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //модель для статьи
    static public function getArticles(){
        $articles = Article::orderBy('id', 'desc')->get();
        return $articles;

    }
    static public function getArticlesByTitle($title){
        $article = Article::findOrFail($title);
        //$article = Article::where('title', '=', $title)->firstOrFail();
        return $article;

    }
}
