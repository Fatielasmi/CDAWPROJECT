<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeMediasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
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
// Route::get('/profil', 'App\Http\Controllers\listeMediasController@Viewprofil');

Route::get('/deconnexion','App\Http\Controllers\listeMEdiasController@deconnexion');
//route: media 

// Route::get('/test','App\Http\Controllers\listeMEdiasController@test');
// Route::get('/info','App\Http\Controllers\listeMEdiasController@getinfo')->name('info');
Route::get('/info/{id}','App\Http\Controllers\listeMEdiasController@Viewmovie');




Route::get('/edit/{id}','App\Http\Controllers\listeMEdiasController@edit');
Route::post('/edit/{id}','App\Http\Controllers\listeMEdiasController@EditFilm');

Route::delete('/film/{id}','App\Http\Controllers\listeMEdiasController@destroy');

// Route::get('/info/{id}','App\Http\Controllers\listeMEdiasController@viewFilm');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\listeMEdiasController@test')
->name('dashboard');


//use when u r connected 
Route::middleware('auth')->group(function () {
    Route::get('/search','App\Http\Controllers\listeMEdiasController@search')->name('medias.search');
    Route::post('/info/{id}','App\Http\Controllers\listeMEdiasController@Store');
   
    Route::get('/favoris/{id}','App\Http\Controllers\listeMEdiasController@addFavoris');
   
    Route::get('/favoris','App\Http\Controllers\listeMEdiasController@GoFavoris');
    Route::get('/playlist/{id}','App\Http\Controllers\listeMEdiasController@PForm');
    Route::post('/playlist/{id}','App\Http\Controllers\listeMEdiasController@addToPlayList');
    Route::get('/playlist','App\Http\Controllers\listeMEdiasController@GoPlayList');
    Route::post('/create_playlist/{id}','App\Http\Controllers\listeMEdiasController@create_playlist');
    Route::get('/watchlist/{id}','App\Http\Controllers\listeMEdiasController@addWatchlist');
    Route::get('/watchlist','App\Http\Controllers\listeMEdiasController@GoWatchlist');
    Route::get('/profil', 'App\Http\Controllers\listeMediasController@Viewprofil');
    Route::post('/user/edit','App\Http\Controllers\listeMediasController@UserEditProfile');
    Route::get('/TVShows','App\Http\Controllers\listeMEdiasController@GoTVShows');
    Route::get('/movies','App\Http\Controllers\listeMEdiasController@GoMovies');
    Route::get('/kids','App\Http\Controllers\listeMEdiasController@GoKids');
    Route::get('/mangas','App\Http\Controllers\listeMEdiasController@GoMangas');
    Route::get('/music','App\Http\Controllers\listeMEdiasController@GoMusic');
    Route::get('/playliste/{id}','App\Http\Controllers\listeMEdiasController@dataPlaylist');
    Route::get('/administration','App\Http\Controllers\listeMEdiasController@crud');
    Route::post('/addUser','App\Http\Controllers\listeMEdiasController@addUser');
    Route::get('/Edit_User/{id}','App\Http\Controllers\listeMEdiasController@FormEditUser');
    Route::post('/Useredit/{id}','App\Http\Controllers\listeMEdiasController@EditUser');
    Route::get('/delete_User/{id}','App\Http\Controllers\listeMEdiasController@deleteUser'); 
    Route::post('/user/update','App\Http\Controllers\listeMEdiasController@UpdateUser');


});
