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


Route::post('/login','Helper@LogUser', function () {
    return view('Accueil');
});

Route::post('/Deconnexion','Helper@UnLogUser', function () {
    return view('Accueil');
});

Route::get('/CreateUser', function () {
    return view('FormUser');
});

Route::get('/' , function () {
    return view('Accueil');
});
