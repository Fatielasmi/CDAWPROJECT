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



Route::get('/edit/{id}','App\Http\Controllers\listeMEdiasController@edit');
Route::post('/edit/{id}','App\Http\Controllers\listeMEdiasController@EditFilm');

Route::delete('/film/{id}','App\Http\Controllers\listeMEdiasController@destroy');

Route::get('/info/{id}','App\Http\Controllers\listeMEdiasController@viewFilm');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
