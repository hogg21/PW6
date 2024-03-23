<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register');

// Вхід користувача
Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');

// Вихід користувача
Route::post('/logout', 'Auth\LoginController@logout');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/posts', 'PostController@index');

// Створення нового поста
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');

// Перегляд конкретного поста
Route::get('/posts/{id}', 'PostController@show');

// Редагування поста
Route::get('/posts/{id}/edit', 'PostController@edit');
Route::put('/posts/{id}', 'PostController@update');

// Видалення поста
Route::delete('/posts/{id}', 'PostController@destroy');

Route::get('/greeting', function () {
    return view('greeting');
});
Route::get('/greeting', function () {
    $username = 'John'; // Замініть 'John' на ім'я користувача, яке ви хочете вітати
    return view('greeting', compact('username'));
});