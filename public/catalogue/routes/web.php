<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeMediasController;
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



//2eme facon de faire



//route : afficher le fichier HTML
Route::get('/index', 'App\Http\Controllers\listeMediasController@afficher');
Route::get('/getForm', 'App\Http\Controllers\listeMediasController@getForm');
Route::get('/create', 'App\Http\Controllers\listeMediasController@create');
Route::post('/create', 'App\Http\Controllers\listeMediasController@addFilm');
Route::get('/profil', 'App\Http\Controllers\listeMediasController@Viewprofil');

Route::get('/deconnexion','App\Http\Controllers\listeMEdiasController@deconnexion');
//route: media 
Route::get('/search','App\Http\Controllers\listeMEdiasController@search')->name('medias.search');
Route::get('/test','App\Http\Controllers\listeMEdiasController@test');
// Route::get('/info','App\Http\Controllers\listeMEdiasController@getinfo')->name('info');
Route::get('/info/{id}','App\Http\Controllers\listeMEdiasController@Viewmovie');




Route::get('/edit/{id}','App\Http\Controllers\listeMEdiasController@edit');
Route::post('/edit/{id}','App\Http\Controllers\listeMEdiasController@EditFilm');

Route::delete('/film/{id}','App\Http\Controllers\listeMEdiasController@destroy');

// Route::get('/info/{id}','App\Http\Controllers\listeMEdiasController@viewFilm');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\listeMEdiasController@test')
->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::post('/info/{id}','App\Http\Controllers\listeMEdiasController@Store');
    Route::get('/favoris/{id}','App\Http\Controllers\listeMEdiasController@addFavoris');
 
});
