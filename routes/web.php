<?php


use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
   Controller,
    FallbackController,
    PostsController,
   HomeController
};

/*
   GET - Request a resource
   POST - Create a new resource
   PUT - Update a resource - Updates the entire row
   PATCH - Modify a resource - Only the changed resource
   DELETE - Deletes a resource
   OPTION - Asks the server which verbs are allowed
*/


// GET 


// POST 


// PUT OR PATCH 


// DELETE


Route::prefix('/blog')->group(function () {
   Route::get('/', [PostsController::class, 'index'])->name('blog.index');
   Route::get('/{id}', [PostsController::class, 'show'])->name('blog.show');

   Route::get('/create', [PostsController::class, 'create'])->name('blog.create');
   Route::post('/', [PostsController::class, 'store'])->name('blog.store');

   Route::get('/edit/{id}', [PostsController::class, 'edit'])->name('blog.edit');
   Route::patch('/{id}', [PostsController::class, 'update'])->name('blog.update');
   
   Route::delete('/edit/{id}', [PostsController::class, 'destroy'])->name('blog.destroy');
});

//Multiple HTTP Verbs
// Route::match(['GET', 'POST'], '/blog', [PostsController::class, 'index']);

// Route::resource('blog', PostsController::class);

// Route for invoke method
Route::get('/', HomeController::class);


// Route::any('/blog', [PostsController::class, 'index']);

// Return view

// Route::view('/blog', 'blog.index', ['name' => 'Code with Dary']);


// Route::get('/blog', [PostsController::class, 'index']);

// Fallback Route

Route::fallback(FallbackController::class);