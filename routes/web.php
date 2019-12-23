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
Route::get('Login',function(){
    return view('Login');
});
Route::get('/Profil/Supprimer-utilisateur',function(){
    return view('Supp');
});