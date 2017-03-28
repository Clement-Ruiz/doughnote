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
    Route::group(['middleware' => 'hasType["type", "admin"]', 'namespace' => 'Admin'], function() {
        //Routes uniquement Admin
            //Gestion des Profils
        Route::get('/profile/create', 'UsersController@create');
        Route::post('/profile/store', 'UsersController@store');
        Route::post('/profile/{id}/destroy', 'UsersController@destroy');

            //Gestion des Matières
        Route::get('/matieres/create', 'MatieresController@create');
        Route::post('/matieres/store', 'MatieresController@store');
        Route::get('/matieres/{id}/edit', 'MatieresController@edit');
        Route::post('/matieres/{id}/update', 'MatieresController@update');
        Route::post('/matieres/{id}/destroy', 'MatieresController@destroy');
    });
    Route::group(['middleware' => 'hasType["type", "prof"]', 'namespace' => 'Prof'], function() {
        //Routes uniquement prof
    });
        //Routes utilisateurs authentifiés
    Route::get('/profile', 'UsersController@index');
    Route::get('/profile/{id}', "UsersController@show");


    Route::post('/profile/{id}/comment/update', 'CommentairesController@update');
    Route::post('/profile/{id}/comment/destroy', 'CommentairesController@destroy');

});
