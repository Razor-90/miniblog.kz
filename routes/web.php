<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// на главной странице сайта показываем список всех постов
Route::get('/', 'PostController@index')->name('blog.index');

Route::get('post/search', 'PostController@search')->name('post.search');            // поиск по блогу

Route::get('post/index', 'PostController@index')->name('post.index');               // все посты блога
Route::get('post/create', 'PostController@create')->name('post.create');            // форма создания
Route::post('post/store', 'PostController@store')->name('post.store');              // сохранение поста
Route::get('post/show/{id}', 'PostController@show')->name('post.show');             // просмотр поста
Route::get('post/edit/{id}', 'PostController@edit')->name('post.edit');             // форма редактирования
Route::patch('post/update/{id}', 'PostController@update')->name('post.update');     // обновление поста
Route::delete('post/destroy/{id}', 'PostController@destroy')->name('post.destroy'); // удаление поста

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
