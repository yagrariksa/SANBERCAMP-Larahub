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

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/laraexp', 'LaraExpController@index');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'MahasiswaController@create');
Route::get('/mahasiswa/{student}', 'MahasiswaController@show');
Route::get('/mahasiswa/{student}/ubah', 'MahasiswaController@edit');
Route::patch('/mahasiswa/{student}', 'MahasiswaController@update');
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::delete('/mahasiswa/{student}', 'MahasiswaController@destroy');

Route::get('/larahub', 'Larahub\LarahubuserController@home'); // homepage 
Route::get('/larahub/login', 'Larahub\LarahubuserController@login')->middleware('guest')->name('login'); // login-page
Route::post('/larahub/login', 'Larahub\LarahubuserController@matching')->middleware('guest'); // login-matching-point
Route::get('/larahub/logout', 'Larahub\LarahubuserController@logout'); // login-page
Route::get('/larahub/register', 'Larahub\LarahubuserController@create')->middleware('guest'); // sign-up-page
Route::post('/larahub/register', 'Larahub\LarahubuserController@store')->middleware('guest'); // sign-up-store
Route::get('/larahub/quest', 'Larahub\QuestionController@index'); // quest-list-page
Route::get('/larahub/quest/add', 'Larahub\QuestionController@create'); // add-quest-page
Route::get('/larahub/quest/{question}', 'Larahub\QuestionController@show'); // detail-quest-page
Route::get('/larahub/quest/{question}/edit', 'Larahub\QuestionController@edit'); // detail-quest-page
Route::patch('/larahub/quest/{question}/edit', 'Larahub\QuestionController@update'); // detail-quest-page
Route::delete('/larahub/quest/{question}/destroy', 'Larahub\QuestionController@destroy')->middleware('auth')->name('delete'); // detail-quest-page
Route::post('/larahub/quest/add', 'Larahub\QuestionController@store')->middleware('auth'); // add-quest-store
Route::post('/larahub/comment/store', 'Larahub\CommentController@store')->middleware('auth'); // add-comment-store
Route::post('/larahub/answer/store', 'Larahub\AnswerController@store')->middleware('auth'); // add-answer-store
