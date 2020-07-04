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

Route::get('/larahub', 'LarahubuserController@home'); // homepage 
Route::get('/larahub/login', 'LarahubuserController@login'); // login-page
Route::post('/larahub/login', 'LarahubuserControll@matching'); // login-matching-point
Route::get('/larahub/create', 'LarahubuserController@create'); // sign-up-page
Route::post('/larahub/create', 'LarahubuserController@store'); // sign-up-store
Route::get('/larahub/quest', 'QuestionController@index'); // quest-list-page
Route::get('/larahub/quest/add', 'QuestionController@create'); // add-quest-page
Route::get('/larahub/{question}', 'QuestionController@show'); // detail-quest-page
Route::post('/larahub/quest/store', 'QuestionController@store'); // add-quest-store
Route::post('/larahub/comment/store', 'QuestionController@store'); // add-comment-store
Route::post('/larahub/answer/store', 'QuestionController@store'); // add-answer-store
