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


use App\Models\Album;

Route::get('page', 'PageController@about');

Route::get('blog', 'PageController@blog');

Route::get('staff', 'PageController@staff');


