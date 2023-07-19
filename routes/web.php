<?php

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FallbackController;
/*
    GET - Request a resource
    POST - Create a new resource
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask a server which verbs are allowed on a giver url

*/

//Route::resource('blog', PostsController::class);

Route::prefix('/blog')->group(function () {
	Route::get('/create', [PostsController::class, 'create'])->name(
		'blog.create',
	);
	//GET
	Route::get('/', [PostsController::class, 'index'])->name('blog.index');
	Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');

	//POST
	Route::post('/', [PostsController::class, 'store'])->name('blog.store');

	//PUT OR PATCH
	Route::get('/edit/{id}', [PostsController::class, 'edit'])->name(
		'blog.edit',
	);
	Route::patch('/{id}', [PostsController::class, 'update'])->name(
		'blog/update',
	);

	//DELETE
	Route::delete('/edit/{id}', [PostsController::class, 'destroy'])->name(
		'blog.destroy',
	);
});
// Route for invoke method
Route::get('/', HomeController::class);

//FALLBACK ROUTES
Route::fallback(FallbackController::class);
//MULTIPLE VERBS
//
//Route::match(['get', 'post'], '/blog', [PostsController::class, 'index']);

//Route::any('/blog', [PostsController::class, 'index']);

//Return a view

//Route::view('/blog', 'blog.index', ['name' => 'Code With Claudiu']);
