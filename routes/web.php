<?php

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

use App\Http\Middleware\RedirectIfAuthenticated;

Route::get('/', function () {
    return view('template');
});

Route::get('/hello', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test', [
        'name' => request('name') ?? 'Brett Akey'
    ]);
});
Route::get('/posts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/task', function () {
    return view('task', [
        'tasks' => App\Task::take(3)->latest('created_at')->get()
    ]);
});