<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/videos', [VideoController::class, 'videos'])->name('videos');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');


Route::get('/',  [FrontendController::class, 'home']);
Route::get('/layout',  [FrontendController::class, 'layout'])->name('layout');
Route::get('/welcome',  [FrontendController::class, 'welcome']);
Route::get('/reviews',  [FrontendController::class, 'videos'])->name('videos');
Route::get('/dashboard',  [FrontendController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
