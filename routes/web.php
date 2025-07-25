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
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard',  [HomeController::class, 'admin_paner'])->middleware(['auth', 'verified'])->name('admin.panel');
Route::get('/user/logout',  [HomeController::class, 'logout'])->middleware(['auth', 'verified'])->name('user.logout');


Route::get('/user/edit',  [UserController::class, 'user_edit'])->middleware(['auth', 'verified'])->name('user.edit');
Route::post('/user/update',  [UserController::class, 'user_update'])->middleware(['auth', 'verified'])->name('user.update');
Route::post('/update/password',  [UserController::class, 'password_update'])->middleware(['auth', 'verified'])->name('update.password');
Route::post('/user/photo/update',  [UserController::class, 'user_photo_update'])->middleware(['auth', 'verified'])->name('user.photo.update');


Route::get('/category',  [CategoryController::class, 'category'])->middleware(['auth', 'verified'])->name('category');
Route::post('/category/add',  [CategoryController::class, 'category_add'])->middleware(['auth', 'verified'])->name('category.add');
Route::get('/category/delete/{id}',  [CategoryController::class, 'category_delete'])->middleware(['auth', 'verified'])->name('category.delete');


Route::get('/subcategory',  [SubCategoryController::class, 'subcategory'])->middleware(['auth', 'verified'])->name('subcategory');
Route::post('/subcategory/add',  [SubCategoryController::class, 'subcategory_add'])->middleware(['auth', 'verified'])->name('subcategory.add');
Route::get('/subcategory/delete/{id}',  [SubCategoryController::class, 'subcategory_delete'])->middleware(['auth', 'verified'])->name('subcategory.delete');




Route::get('/tag',  [TagController::class, 'tag'])->middleware(['auth', 'verified'])->name('tag');
Route::post('/tag/stor',  [TagController::class, 'tag_stor'])->middleware(['auth', 'verified'])->name('tag.stor');
Route::get('/tag/delete/{id}',  [TagController::class, 'tag_delete'])->middleware(['auth', 'verified'])->name('tag.delete');
Route::post('/blogtags/store',  [TagController::class, 'blogtags_store'])->middleware(['auth', 'verified'])->name('blogtags.store');




Route::get('/products', [ProductController::class, 'products'])->name('products');
Route::get('/add/products', [ProductController::class, 'add_products'])->middleware(['auth', 'verified'])->name('add.products');
Route::post('/getsubcategory', [ProductController::class, 'getsubcategory'])->middleware(['auth', 'verified']);
Route::post('/products/stor', [ProductController::class, 'products_stor'])->middleware(['auth', 'verified'])->name('products.stor');


Route::get('/sarvices', [SarvicesController::class, 'sarvices'])->name('sarvices');



Route::get('/reviews', [VideoController::class, 'videos'])->name('videos');


Route::get('/blogs', [BlogController::class, 'blogs'])->name('blogs');
Route::get('/blog/show',  [BlogController::class, 'blog_show'])->name('blog.show');
Route::get('/add/blogs',  [BlogController::class, 'add_blogs'])->middleware(['auth', 'verified'])->name('add.blogs');
Route::post('/add/store',  [BlogController::class, 'blogs_store'])->middleware(['auth', 'verified'])->name('blogs.store');




Route::get('/',  [FrontendController::class, 'home'])->name('home');
Route::get('/welcome',  [FrontendController::class, 'welcome']);
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
