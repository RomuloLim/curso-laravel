<?php

use App\Http\Controllers\{
    PostController
};
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::any('/posts/search', [PostController::class, 'search'])->name('posts.search');

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/novo', [PostController::class, 'create'])->name('posts.create');
Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');

Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::get('/', function () {
    return view('welcome');
});
