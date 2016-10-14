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
//баг в форме добавления, текст не меняется
//сделать в форме ввод категории через список - DONE
//сделать вывод категории не только на главной - DONE
//сделать одну функцию для гет постов через перегрузку
//сделать получение токена при удалении функцией(есть в доках $token = csrf_token();)
//изменить таблицы(для коментов айди для hasMany) - DONE
//сделать страницу 404
//поудалать лишние классы в html
//перенести функционал из роутов в контроллеры - DONE
//реализовать авторизацию для админа
//попробовать использовать клоне в местах с генерацией хтмл кода
//test commit

Route::get('/', [ 'uses' => 'BlogController@getIndex', 'as' => 'index']);
Route::get('/category/{name}', ['uses' => 'BlogController@getCategory', 'as' => 'category']);
Route::get('/admin', ['uses' => 'AdminController@getIndex', 'as' => 'admin']);
Route::post('/admin/delete', ['uses' => 'AdminController@postDelete', 'as' => 'delete']);
Route::post('/admin/add', ['uses' => 'AdminController@postAdd', 'as' => 'add']);
Route::get('/{title}', [ 'uses' => 'BlogController@getArticle', 'as' => 'article']);
Route::post('/{title}', 'BlogController@postArticle');


// сделать авторизацию для админа

