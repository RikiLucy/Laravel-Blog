<?php

//use App\Http\Controllers\BlogController;
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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', [ 'uses' => 'BlogController@getIndex', 'as' => 'index']); // главная страница
Route::get('/category/{name}', ['uses' => 'BlogController@getCategory', 'as' => 'category']); // статьи по категориям
Route::group(['middleware' => 'admin'], function (){
    Route::get('/admin', ['uses' => 'AdminController@getIndex', 'as' => 'admin']); // админка
    Route::post('/admin/delete', ['uses' => 'AdminController@postDelete', 'as' => 'delete']); // удалить статью
    Route::post('/admin/add', ['uses' => 'AdminController@postAdd', 'as' => 'add']); // добавить статью
});

Route::get('/{title}', [ 'uses' => 'BlogController@getArticle', 'as' => 'article']); // статья
Route::post('/{title}', [ 'uses' => 'BlogController@postArticle', 'as' => 'addComment']); // добавить комментарий к статье


// сделать авторизацию для админа



