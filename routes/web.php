<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\WasteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisteredUserController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/post',[PostController::class,'index'])->name('posts.index');
Route::get('/post/create',[PostController::class,'create'])->name('posts.create');
Route::post('/post',[PostController::class,'store'])->name('posts.store');
Route::get('/post/{post}/edit',[PostController::class,'edit'])->middleware('auth','admin')->name('posts.edit');
Route::put('/post/{post}/update',[PostController::class,'update'])->middleware('auth','admin')->name('posts.update');
Route::delete('/post/{post}/destroy',[PostController::class,'destroy'])->middleware('auth','admin')->name('posts.destroy');

Route::get('/waste', [WasteController::class, 'index'])->name('waste.wasteForm');
Route::post('/waste',[WasteController::class,'store'])->name('waste.store');
Route::get('/waste/show',[WasteController::class,'show'])->middleware('auth','admin')->name('waste.show');
Route::delete('/waste/{waste}/destroy',[WasteController::class,'destroy'])->middleware('auth','admin')->name('waste.destroy');

Route::get('/product', [ProductController::class, 'myproduct'])->name('waste.product');
Route::post('/product',[ProductController::class,'put'])->name('waste.put');

Route::get('/waste/registeredUser', [RegisteredUserController::class, 'userShow'])->middleware('auth','admin')->name('waste.registeredUser');
Route::get('/waste/emailView/view/{id}', [RegisteredUserController::class, 'emailView'])->middleware('auth','admin')->name('waste.emailView');
Route::post('/store/email/{id}', [RegisteredUserController::class, 'storeEmail'])->middleware('auth','admin')->name('store.email');
Route::get('/store/email/all', [RegisteredUserController::class, 'emailAll'])->middleware('auth','admin')->name('store.emailAllView');
Route::post('/store/email/all', [RegisteredUserController::class, 'storeEmailAll'])->middleware('auth','admin')->name('store.emailAll');


//multiple login system
route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');




});

require __DIR__.'/auth.php';



