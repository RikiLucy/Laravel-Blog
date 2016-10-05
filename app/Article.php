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
            //->select('articles.*', 'articles.categories')
            ->get();
        return $articles;

    }
    static public function getArticlesByTitle($title){
        $article = Article::findOrFail($title);
        //$article = Article::where('title', '=', $title)->firstOrFail();
        return $article;

    }
    public function Comments(){
        return $this->hasMany('App\Comment');

    }

    //public function getArticlesByCategory($category){
    static public function getArticlesByCategory($name){

            $category_id = Category::where('name', '=', $name)->firstOrFail(); // сделать через отношения
            $article = Article::where('categories', '=', $category_id->id)->orderBy('id', 'desc')->get();
            return $article;

        }

        //return $this->hasOne('App\Id_categorie', 'id', 'categories');

    //}
}
