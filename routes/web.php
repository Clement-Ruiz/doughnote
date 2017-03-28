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


Route::get('/changepass', function () {
    return view('changepass');
});

Route::post('updatepass', array(
    "as" => "updatepass",
    "uses" => "LoginController@updatepass"
));

Route::post('connexion', array(
    "as" => "connexion",
    "uses" => "LoginController@connexion"
));

Route::get('deconnexion',array(
   "as"=>"deconnexion",
    "uses" => "LoginController@deconnexion"
));

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
