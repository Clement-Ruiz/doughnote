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

Route::get('/test', function () {
    return view('test');
});

Route::group(['middleware' => 'auth'], function() {
    Route::group(['middleware' => 'hasType:admin', 'namespace' => 'Admin'], function() {
        //Routes uniquement Admin
    });
    Route::group(['middleware' => 'hasType:prof', 'namespace' => 'Prof'], function() {
        //Routes uniquement prof
    });

        //Routes utilisateurs authentifiés
    Route::get('listeEtudiant', 'UsersController@index');
});
