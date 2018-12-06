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
Route::resource('projects', 'ProjectsController');

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/{project}', 'ProjectsController@show'); // si tu retires rout model bindings ca marche...Sinon en utilisant une seule route ca marche aussi => Route::resource('projects', 'ProjectsController');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');