<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;

// Route::get('/', function () {
//     return view('welcome');
// });

//client
Route::get('/',[ClientController::class,'home']);
Route::get('/shop',[ClientController::class,'shop']);
Route::get('/panier',[ClientController::class,'panier']);
Route::get('/client_login',[ClientController::class,'client_login']);
Route::get('/signup',[ClientController::class,'signup']);
Route::get('/paiement',[ClientController::class,'paiement']);
Route::get('/select_par_cat/{name}',[ClientController::class,'select_par_cat']);
Route::get('/ajouter_au_panier/{id}',[ClientController::class,'ajouter_au_panier']);
Route::post('/modifier_qty/{id}',[ClientController::class,'modifier_panier']);
Route::get('/retirer_produit/{id}',[ClientController::class,'retirer_produit']);
Route::get('/creer_compte/{id}',[ClientController::class,'creer_compte']);

//backend
Route::get('/admin',[AdminController::class,'dashboard']);
Route::get('/commandes',[AdminController::class,'commandes']);

//Category
Route::get('ajoutercategorie',[CategoryController::class,'ajoutercategorie']);
Route::post('sauvercategorie',[CategoryController::class,'sauvercategorie'] );
Route::get('/categories',[CategoryController::class,'categories']);
Route::get('/edit_categorie/{id}',[CategoryController::class,'edit_categorie']);
Route::put('/modifiercategorie/{id}',[CategoryController::class,'modifiercategorie']);
Route::get('/supprimercategorie/{id}',[CategoryController::class,'supprimercategorie']);

//Product
Route::get('/ajouterproduit',[ProductController::class,'ajouterproduit']);
Route::post('/sauverproduit',[ProductController::class,'sauverproduit']);
Route::get('/produits',[ProductController::class,'produits']);
Route::get('edit_produit/{id}',[ProductController::class,'edit_produit']);
Route::put('/modifierproduit/{id}',[ProductController::class,'modifierproduit']);
Route::get('/supprimerproduit/{id}',[ProductController::class,'supprimerproduit']);
Route::get('/activer_produit/{id}',[ProductController::class,'activer_produit']);
Route::get('/desactiver_produit/{id}',[ProductController::class,'desactiver_produit']);

//Slider
Route::get('/ajouterslider',[SliderController::class,'ajouterslider']);
Route::post('/sauverslider',[SliderController::class,'sauverslider']);
Route::get('/sliders',[SliderController::class,'sliders']);
Route::get('/edit_slider/{id}',[SliderController::class,'edit_slider']);
Route::post('/modifierslider/{id}',[SliderController::class,'modifierslider']);
Route::get('/supprimerslider/{id}',[SliderController::class,'supprimerslider']);
Route::get('/desactiver_slider/{id}',[SliderController::class,'desactiver_slider']);
Route::get('/activer_slider/{id}',[SliderController::class,'activer_slider']);