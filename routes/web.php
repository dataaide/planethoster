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

Route::view('/', 'welcome');

Route::view('/plus_infos1', 'plus_infos1'); 

Route::view('/plus_infos2', 'plus_infos2');

Route::view('/plus_infos3', 'plus_infos3');

Route::get('/contact', 'ContactController@formulaire');

Route::post('/contact', 'ContactController@traitement');

Route::get('/solution', 'SolutionsController@solution');