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

Route::get('/', function () { //index

    return view('index', [
        'article' => Article::getArticles()
    ]);

})->name('index');

Route::get('/{title}', function ($title) { //article

    return view('article', [
        'article' => Article::getArticlesByTitle($title),
        'comment' => Comment::getComments($title)
    ]);

});
Route::post('/{title}', function (Request $request, $title) { //comments

    date_default_timezone_set('GMT');
    $date = date("F j, Y, g:i a");
    $comment = new Comment();
    $comment->text = strip_tags(nl2br($request->text), '<br /><br/><br>');
    $comment->date = $date;
    $comment->author = $request->author;
    $comment->id_article = $title;
    $comment->save();
    $response = [
        'text' => strip_tags(nl2br($request->text), '<br /><br/><br>'),
        'author' => $request->author,
        'date' => $date
    ];
//



    return Response::json( $response );
    //return redirect('/{title}');
});

Route::get('/admin', function (){
// сделать авторизацию для админа
});
