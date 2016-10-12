<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Article extends Model
{
    //модель для статьи
    static public function getArticles(){
        //$articles = Article::orderBy('id', 'desc')->get();
        //return $articles;
        $articles = DB::table('articles')
            ->Join('categories', 'articles.categories', '=', 'categories.id')
            ->select('articles.*', 'categories.categories')
            ->orderBy('id', 'desc')
            ->get();
        return $articles;

    }
    static public function getArticlesByTitle($title){
        $article = Article::findOrFail($title);

        //$category_id = Category::where('categories', '=', $name)->firstOrFail();
        //$article = Article::where('title', '=', $title)->firstOrFail();
        return $article;

    }

    static public function getCategoryByTitle($title){
        $article = Article::findOrFail($title);
        $category = Category::find($article->categories);

        //$category_id = Category::where('categories', '=', $name)->firstOrFail();
        //$article = Article::where('title', '=', $title)->firstOrFail();
        return $category;

    }

    public function Comments(){
        return $this->hasMany('App\Comment');

    }

    //public function getArticlesByCategory($category){
    static public function getArticlesByCategory($name){


        $category_id = Category::where('categories', '=', $name)->firstOrFail(); // сделать через отношения

        $articles = DB::table('articles')
            ->Join('categories', 'articles.categories', '=', 'categories.id')
            ->select('articles.*', 'categories.categories')
            ->where('articles.categories', '=', $category_id->id)
            ->orderBy('id', 'desc')

            ->get();

        return $articles;



        }

        //return $this->hasOne('App\Id_categorie', 'id', 'categories');

    //}
}
