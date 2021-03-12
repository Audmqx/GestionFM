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




// Route pour modifier une fiche

Route::get('/modifier-une-fiche','\App\Http\Controllers\ModifierFicheController@ShowFicheMetier')->name('modifierFM')->middleware('auth');

Route::post('/modifier-une-fiche','\App\Http\Controllers\ModifierFicheController@TraitementFicheMetier')->middleware('auth');




// Route pour soft delete et rollback soft delete

Route::get('/soft-delete','\App\Http\Controllers\ModifierFicheController@SoftDeleteFicheMetier')->name('desactiverFM')->middleware('auth');

Route::get('/soft-rollback','\App\Http\Controllers\ModifierFicheController@SoftRollbackFicheMetier')->name('softrollback')->middleware('auth');


// Route pour delete une fiche

Route::get('/delete','\App\Http\Controllers\ModifierFicheController@DeleteFicheMetier')->name('deleteFM')->middleware('auth');





// Routes accessibles seulement par le super admin

Route::group(["middleware" => ['auth', 'checkRole']], function () {


	// Route pour le dashboard des fiches désactivees

	Route::get('/liste-fiches-desctivees', '\App\Http\Controllers\ModifierFicheController@ShowFicheMetierDesactivees')->name('listeFichesDesactivees');

	// Route pour le crud sur les admins

	Route::get('/liste-admins', '\App\Http\Controllers\AdminsController@AccesDashboard')->name('CRUDadmins');

	// Route pour ajouter un admin

	Route::get('/add-admin', '\App\Http\Controllers\AdminsController@ShowAddAdmin')->name('AddAdmin');

	Route::post('/add-admin', '\App\Http\Controllers\AdminsController@AddAdmin');


	// Route pour ajouter un admin

	Route::get('/update-admin', '\App\Http\Controllers\AdminsController@ShowUpdateAdmin')->name('UpdateAdmin');

	Route::post('/update-admin', '\App\Http\Controllers\AdminsController@UpdateAdmin');


	// Route pour supprimer un admin

	Route::get('/delete-admin', '\App\Http\Controllers\AdminsController@DeleteAdmin')->name('DeleteAdmin');


});



// Route pour se déconnecter

Route::get('logout', '\App\Http\Controllers\LoginController@logout')->name('logout');
