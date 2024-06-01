<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome');
});

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index'); // Route pour index

Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create'); // fAjout, afficher le formulaire de création d'article 

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store'); // fAjout,traiter la création d'article

// Route pour supprimer un article
Route::delete('articles/{id}', [ArticleController::class, 'destroy'])->name('articles.delete');

// Route pour afficher le formulaire voir detaille d'un article
Route::get('articles/{id}/read', [ArticleController::class, 'read'])->name('articles.read');


// Afficher le formulaire d'édition d'un article
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

// Mettre à jour un article existant
Route::put('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');







// Route::get('articles/{id}/update', [ArticleController::class, 'update'])->name('articles.update');
// // Route pour mettre à jour un article
// Route::post('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');






