<?php
use \App\Article;
use \App\Comment;
use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {

    return view('index', [
        'article' => Article::getArticles()
    ]);

});
Route::get('/{title}', function ($title) {

    return view('article', [
        'article' => Article::getArticlesByTitle($title),
        'comment' => Comment::getComments($title)
    ]);

});
Route::post('/{title}', function (Request $request, $title) {


    $comment = new Comment();
    $comment->text = $request->text;

    $comment->author = $request->author;
    $comment->id_article = 2;
    $comment->save();
    $response = ['text' => $request->text,
        'author' => $request->author];



    return Response::json( $response );
    //return redirect('/{title}');
});

Route::get('/admin', function (){
// сделать авторизацию для админа
});
