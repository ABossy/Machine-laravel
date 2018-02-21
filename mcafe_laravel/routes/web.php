<?php

//JavaScript

Route::get('/javascript','WelcomeController@indexJs');


//Page ACCUEIL 

Route::get('/', 'WelcomeController@indexGuest');
// Vue GUEST
Route::get('/guest', 'WelcomeController@indexGuest');
// Récuperation des infos Boissons Guest.
Route::post('/guest', 'WelcomeController@storeGuest')->name('commande.storeGuest');
// Formulaire commande boisson Guest



Route::group(['middleware'=>'auth'], function(){
// HOME

Route::get('/bienvenue', 'WelcomeController@indexVente');
Route::post('/bienvenue', 'WelcomeController@store')->name('commande.store');
Route::get('5','VentesController@show')->name('vente.details');
});

Route::group(['middleware'=>'admin'], function(){
//BOISSONS


Route::get('1', 'BoissonsController@index')
->name('boisson.index');
// vue Boisson

Route::get('details/boisson/{id}','detailsBoissonsController@index')->name('boissons.show');
// Route liée à mon controller qui affiche les details en fonction de l'id.
Route::post('1','BoissonsController@store')->name('boisson.store');
// Route liée à mon controller qui récupere les infos du get.
Route::delete('/boisson/{id}','BoissonsController@destroy')->name('boisson.destroy');
// Route liée a mon controller boisson qui supprime la boisson. 
Route::put('/modif/{id}','BoissonsController@edit')->name('boisson.modif');
// Route liée a mon controller boisson qui modifie la boisson.
Route::get('/za', 'BoissonsController@nomdown')->name('orderZA');
// route du bouton ordre décroissant
Route::get('/prixup', 'BoissonsController@prixup')->name('prixup');
// route du bouton prix croissant
Route::get('/prixdown', 'BoissonsController@prixdown')->name('prixdown');
// route du bouton prix décroissant


// INGREDIENTS:


Route::get('2', 'IngredientsController@index');
// vue ingredients



// lien INGREDIENTS:


Route::get('details/ingredients/{id}','detailsIngredientsController@index')->name('listeingredients.show');
// Route liée à mon controller qui affiche les details en fonction de l'id.
Route::post('2','IngredientsController@store')->name('ingredients.store');
// Route liée à mon controller qui récupere les infos du get.
Route::delete('ingredients/{id}','IngredientsController@destroy')->name('ingredients.destroy');
// permet de supprimer 
Route::put('/modif/ingredient/{id}','IngredientsController@edit')->name('ingredients.modif');
//permet de modifier


// MONNAIE

Route::get('3', 'MonnaieController@show');
//vue monnaie


// Pages RECETTES


Route::get('4', 'RecettesController@index');
// Vue Recettes
Route::post('4','RecettesController@store')->name('recette.store');
// Route liée à mon controller qui récupere les infos du get(formulaire)et les renvois sur ma page detail.

Route::get('/liste/boissons/{id}','RecettesController@show')->name('boissons.details');
//affiche le detail des boissons en fonction de l'id sur la page details recette.
Route::delete('/liste/boissons/{id}','RecettesController@destroy')->name('recettes.destroy');
// permet de tout supprimer 


Route::delete('/liste/recette/{id}','RecettesController@destroyIngredient')->name('lignerecette.destroy');
// permet de supprimer en fonction de l'ingredient de la recette.



// ROUTE VENTES //


//permet d'afficher les ventes de la bdd
Route::delete('5/ventes/{id}', 'VentesController@destroyVente')->name('ventes.destroy');

});

//ROUTES PROTEGEES//

Route::post('/inscription','UsersController@store');
// route du user test



// AUTHENTIFICATION //
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


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


