<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Article;
use \App\Comment;
use \App\Category;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;


class AdminController extends Controller
{
    public function getIndex(){
        return view('admin', [
            'article' => Article::getArticles(),
            'comment' => Comment::all(),
            'category' => Category::all()
        ]);
    }

    public function postDelete(Request $request){
        $id_article = $request->id;
        $article = Article::find($id_article);
        $article->delete();

        $category = Category::find($article->categories);
        $category->count --;
        $category->save();

        $response = [ 'id' => $request->id];

        //return redirect('/');
        return Response::json($response);
    }

    public function postAdd(Request $request){
        $post = new Article();
        $post->description = $request->description;
        $post->text = $request->text;
        $post->title = $request->title;
        $post->date = $request->date;
        $post->author = $request->author;
        $id_catigories = Category::where('categories', $request->categories)->first(); // нашел айди категории
        $id_catigories->count ++;
        $id_catigories->save();
        $post->categories = $id_catigories->id; // добавил найденый айди в таблицу поста

        $post->save();

        $response = [
            'id' => $post->id,
            'title' => $request->title,
            'date' => $request->date,
            'author' => $request->author,
            'categories' => $request->categories
        ];
        return Response::json($response);
    }
}
