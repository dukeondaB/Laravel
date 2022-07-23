<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetail;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('/')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::post('/',[ContactController::class, 'saveEmail'])->name('contact.email');
    Route::get('product',[ProductListController::class, 'index'])->name('product-list');
    Route::get('search', [SearchController::class, 'searchClient'])->name('search');
    // sortType cực chuối
    // Route::get('cate/{category}',[ProductListController::class,'SortType'])->name('cate');

    Route::get('contact',[ContactController::class, 'index'])->name('contact-form');
    Route::post('contact',[ContactController::class, 'save'])->name('contact.store');
    Route::get('product-detail/{product}', [ProductDetail::class, 'index'])->name('product');
    // cart
    Route::get('cart',[CartController::class,'index'])->name('cart');
    Route::get('add-to-cart/{product}', [ProductListController::class, 'addToCart'])->name('add.to.cart');
    Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');
    Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
});
Auth::routes();
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('student', StudentController::class);
    Route::get('/users', [UsersController::class, 'index']);
    Route::get('/users/create', [UsersController::class, 'user_create'])->name('user.create');
    Route::post('/users/store', [UsersController::class, 'store']);
    Route::resource('products',ProductController::class);
    Route::get('contact',[ContactController::class,'show'])->name('admin.contact');
    Route::get('category',[CategoryController::class,'index'])->name('category');
    Route::get('size',[SizeController::class,'index'])->name('size');
    // Route::get('/search','ProductController@search');
    Route::get('products/search',[ProductController::class,'search'])->name('product-search');
    Route::get('students/search',[StudentController::class,'search'])->name('student-search');
});
