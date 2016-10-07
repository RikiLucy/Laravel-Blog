<?php
use \App\Article;
use \App\Comment;
use \App\Category;
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

// сделать вывод кол-ва статей из определенной категории(уменьшение при удалиние и + при добавлении)
// исправить поля формы после добавления
// сделать в форме ввод категории через список
// сделать вывод категории не только на главной
//изменить таблицы(для коментов айди для hasMany) - DONE
//сделать страницу 404
//поудалать лишние классы в html
//перенести функционал из роутов в контроллеры
//реализовать авторизацию для админа
//попробовать использовать клоне в местах с генерацией хтмл кода
//test commit
/*{
    static public function getCategories(){
        $categories = Id_categorie::orderBy('id', 'desc')->get();
        return $categories;

    }
    static public function getArticlesByCategory($name){

        $category_id = Id_categorie::where('name', '=', $name)->firstOrFail(); // сделать через отношения
        $article = Article::where('categories', '=', $category_id->id)->get();
        return $article;

    }
}*/


Route::get('/', function () { //index

    return view('index', [
        'article' => Article::getArticles(),
        'categorie' => Category::getCategories() // для сайд бара
    ]);
    //return Article::getArticles();

})->name('index');

Route::get('/category/{name}', function ($name) { //category

    return view('index', [
        'article' => Article::getArticlesByCategory($name),
        'categorie' => Category::getCategories() // для сайд бара
    ]);

})->name('category');


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

})->name('add');




Route::get('{title}', function ($title) { //article

    return view('article', [
        'article' => Article::getArticlesByTitle($title),
        'comment' => Article::getArticlesByTitle($title)->comments
    ]);

})->name('article');
Route::post('/{title}', function (Request $request, $title) { // роут для ответа на аякс

    date_default_timezone_set('GMT');
    $date = date("F j, Y, g:i a");
    $comment = new Comment();
    $comment->text = strip_tags(nl2br($request->text), '<br /><br/><br>');
    $comment->date = $date;
    $comment->author = $request->author;
    $comment->article_id = $title;
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

