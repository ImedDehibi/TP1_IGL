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

Route::get('/', function () {
    return view('welcome');
});
Route::view('Paramètres','Paramètres');
Route::view('Enseignant','Enseignant');
Route::view('a-propos','a-propos');
Route::view('Description','Description');
Route::post('Renseigement','NameController@store');

Route::view('/RenseignerPresence','RenseignerPresence');

Route::get('/Presences', [
    'uses' => 'NameController@index'
]);

Route::post('/create/Presence', 'PresencesController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

