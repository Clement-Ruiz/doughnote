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

Route::group(['middleware' => 'auth'], function() {
	Route::group(['middleware' => 'isAdmin', 'namespace' => 'Admin'], function() {
		Route::ressource('admin', 'AdminsController', [
			'except' => ['profil']
			]);
		Route::get('profil/{user}', function(){
		});
	})
	Route::group(['middleware' => 'isProf', 'namespace' => 'Prof'], function() {
		Route::ressource('prof', 'ProfsController', [
			'except' => ['profil']
			]);
		Route::get('profil/{user}', function(){
		});
	})
	Route::group(['middleware' => 'isEleve', 'namespace' => 'Eleve'], function() {
		Route::ressource('eleve', 'ElevesController', [
			'except' => ['profil']
			]);
		Route::get('profil/{user}', function(){
		});
	})
})