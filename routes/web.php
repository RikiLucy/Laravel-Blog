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
//todo
//изменить таблицы(для коментов айди для hasMany)
//реализовать категории
//поудалать лишние классы в html
//перенести функционал из роутов в контроллеры
//реализовать авторизацию для админа
//попробовать использовать клоне в местах с генерацией хтмл кода


Route::get('/', function () { //index

    return view('index', [
        'article' => Article::getArticles()
    ]);

})->name('index');

Route::get('/admin', function (){
    return view('admin', [
        'article' => Article::all(),
        'comment' => Comment::all()
    ]);
})->name('admin');



Route::post('/admin/delete', function (Request $request) {
    $id_article = $request->id;
    $article = Article::find($id_article);
    $article->delete();
    $response = [ 'id' => $request->id];
    echo 123;
    //return redirect('/');
    return Response::json($response);


})->name('delete');

Route::post('/admin/add', function (Request $request) {
    $post = new Article();
    $post->text = $request->text;
    $post->title = $request->title;

    $post->date = $request->date;
    $post->author = $request->author;
    $post->tags = $request->tags;
    $post->save();
    $response = [
        'id' => $post->id,
        'title' => $request->title,
        'date' => $request->date,
        'author' => $request->author,
        'tags' => $request->tags
    ];
    return Response::json($response);

})->name('add');




Route::get('/{title}', function ($title) { //article

    return view('article', [
        'article' => Article::getArticlesByTitle($title),
        'comment' => Comment::getComments($title)
    ]);

});
Route::post('/{title}', function (Request $request, $title) { // роут для ответа на аякс

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
    return Response::json( $response );
    //return redirect('/{title}');
});


// сделать авторизацию для админа

