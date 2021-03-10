<?php

use Illuminate\Support\Facades\Route;





// Route pour la page d'accueil

Route::get('/', 'App\Http\Controllers\loginController@formulaire')->name('welcome');
Route::post('/', 'App\Http\Controllers\loginController@traitement');


// Route pour l'accès au dashboard protégé par un middleware

Route::get('/admin', '\App\Http\Controllers\DashboardController@AccesDashboard')->name('dashboard')->middleware('auth');

// Route pour accèder à une fiche complète

Route::get('/admin/{code_rom}', '\App\Http\Controllers\DashboardController@GetFicheMetier')->middleware('auth');


// Route pour créer une fiche

Route::get('/creer-une-fiche', '\App\Http\Controllers\DashboardController@CreateFicheMetier')->name('creerFM')->middleware('auth');

Route::post('/creer-une-fiche', '\App\Http\Controllers\DashboardController@TraitementFicheMetier')->middleware('auth');

// Route pour se déconnecter

Route::get('logout', '\App\Http\Controllers\LoginController@logout')->name('logout');
