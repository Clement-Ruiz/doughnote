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
        Route::resource('admin', 'AdminsController', [
            'except' => ['profil']
        ]);
        Route::resource('matiere.note', 'MatieresNotesController');
        Route::get('profil/{user}', "AdminControllers@profil");
    });
    Route::group(['middleware' => 'hasType:prof', 'namespace' => 'Prof'], function() {
        Route::resource('prof', 'ProfsController', [
            'except' => ['profil']
        ]);
        Route::get('profil/{user}', "ProfControllers@profil");
    });
    Route::group(['middleware' => 'hasType:eleve', 'namespace' => 'Eleve'], function() {
        Route::resource('eleve', 'ElevesController', [
            'except' => ['profil']
        ]);
        Route::get('profil/{user}', "ElevesController@profil");
    });
});
