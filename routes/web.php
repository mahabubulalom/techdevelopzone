<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SarvicesController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard',  [HomeController::class, 'admin_paner'])->middleware(['auth', 'verified'])->name('admin.panel');
Route::get('/user/logout',  [HomeController::class, 'logout'])->middleware(['auth', 'verified'])->name('user.logout');


Route::get('/user/edit',  [UserController::class, 'user_edit'])->middleware(['auth', 'verified'])->name('user.edit');
Route::post('/user/update',  [UserController::class, 'user_update'])->middleware(['auth', 'verified'])->name('user.update');
Route::post('/update/password',  [UserController::class, 'password_update'])->name('update.password');


Route::get('/category',  [CategoryController::class, 'category'])->middleware(['auth', 'verified'])->name('category');
Route::post('/category/add',  [CategoryController::class, 'category_add'])->middleware(['auth', 'verified'])->name('category.add');
Route::get('/category/delete/{id}',  [CategoryController::class, 'category_delete'])->middleware(['auth', 'verified'])->name('category.delete');


Route::get('/subcategory',  [SubCategoryController::class, 'subcategory'])->middleware(['auth', 'verified'])->name('subcategory');
Route::post('/subcategory/add',  [SubCategoryController::class, 'subcategory_add'])->middleware(['auth', 'verified'])->name('subcategory.add');
Route::get('/subcategory/delete/{id}',  [SubCategoryController::class, 'subcategory_delete'])->middleware(['auth', 'verified'])->name('subcategory.delete');




Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/add/products', [ProductController::class, 'add_products'])->middleware(['auth', 'verified'])->name('add.products');
Route::post('/getsubcategory', [ProductController::class, 'getsubcategory'])->middleware(['auth', 'verified']);


Route::get('/sarvices', [SarvicesController::class, 'sarvices'])->name('sarvices');



Route::get('/reviews', [VideoController::class, 'videos'])->name('videos');
Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');


Route::get('/',  [FrontendController::class, 'home'])->name('home');
Route::get('/welcome',  [FrontendController::class, 'welcome']);
Route::get('/blog/show',  [FrontendController::class, 'blog_show'])->name('blog.show');
Route::get('/blogs',  [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/contact',  [FrontendController::class, 'contact'])->name('contact');










// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');










Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
