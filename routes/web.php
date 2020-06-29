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


Route::get('/gallery', 'GalleriesController@gallery');

Auth::routes();

// Route::get('/home', 'home');
Route::get('/', 'HomeController@index')->name('home');
Route::resource('galleries','GalleriesController');   
Route::get('admin/create', 'StudentsController@create');
Route::resource('students','StudentsController');

