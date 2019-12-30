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
Route::get('Profil',function(){
    return view('Profil');
});
Route::view('Login','Login');
Route::get('/Profil/Supprimer-utilisateur',function(){
    return view('Supp');
});
Route::view('Paramètres','Paramètres');
Route::view('a-propos','a-propos');
Route::view('Description','Description');
Route::post('Renseigement','NameController@store');

Route::view('/RenseignerPresence','RenseignerPresence');

Route::get('/Presences', [
    'uses' => 'PresencesController@effacer',
    'uses' => 'NameController@index'
]);

Route::post('/create/Presence', 'PresencesController@store');

Route::get('client','ClientsController@list');
Route::view('Paramètres','Paramètres');
Route::view('a-propos','a-propos');
Route::view('Description','Description');
Route::post('client','ClientsController@store');

