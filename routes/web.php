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

//сделать вывод кол-ва статей из определенной категории(уменьшение при удалиние и + при добавлении) - DONE
//исправить поля формы после добавления, пока оставить для более быстрого тестирования
//баг в форме добавления, текст не меняется, добавляется только со второго раза, дело в редакторе
//сделать в форме ввод категории через список - DONE
//сделать вывод категории не только на главной - DONE
//изменить таблицы(для коментов айди для hasMany) - DONE
//сделать страницу 404
//поудалать лишние классы в html
//перенести функционал из роутов в контроллеры - DONE
//реализовать авторизацию для админа
//попробовать использовать клоне в местах с генерацией хтмл кода
//test commit
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', [ 'uses' => 'BlogController@getIndex', 'as' => 'index']); // главная страница
Route::get('/category/{name}', ['uses' => 'BlogController@getCategory', 'as' => 'category']); // статьи по категориям
Route::get('/admin', ['middleware' => 'auth', 'uses' => 'AdminController@getIndex', 'as' => 'admin']); // админка
Route::post('/admin/delete', ['uses' => 'AdminController@postDelete', 'as' => 'delete']); // удалить статью
Route::post('/admin/add', ['uses' => 'AdminController@postAdd', 'as' => 'add']); // добавить статью
Route::get('/{title}', [ 'uses' => 'BlogController@getArticle', 'as' => 'article']); // статья
Route::post('/{title}', [ 'uses' => 'BlogController@postArticle', 'as' => 'addComment']); // добавить комментарий к статье


// сделать авторизацию для админа



