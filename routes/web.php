<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::resource('posts', PostController::class)
    ->only(['edit', 'update', 'create', 'store', 'destroy'])
    ->middleware(['auth', 'verified']);

Route::resource('posts', PostController::class)
    ->only(['index', 'show']);

Route::get('/posts/user/{id}/{locale?}', [PostController::class, 'user'])->name('posts.user');

Route::get('/toggleFollow/{id}', [PostController::class, 'toggleFollow'])
    ->middleware(['auth', 'verified'])
    ->name('toggleFollow');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/profile', [ProfileController::class, 'image'])->name('profile.image');
});

require __DIR__.'/auth.php';
