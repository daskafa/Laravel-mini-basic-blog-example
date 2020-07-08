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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', 'dataController@index')->name('homepage');

// CREATE
Route::get('/create', 'dataController@create')->name('create');
Route::post('/createPost', 'dataController@createPost')->name('create.post');

// DELETE
Route::get('/delete/{id}', 'dataController@delete')->name('delete');

// UPDATE
Route::get('/update/{id}', 'dataController@update')->name('update');
Route::post('/updatepost/{id}', 'dataController@updatePost')->name('update.post');

// SINGLE
Route::get('/{title}', 'dataController@single')->name('single');








//
