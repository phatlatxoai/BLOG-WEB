<?php

use App\Models\listings;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tagsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\listingsController;

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
// index
Route::get('/', [listingsController::class ,'index']);
Route::get('/management', [listingsController::class ,'management'])->middleware('auth');
// Xêm thêm
Route::get('/posts', [listingsController::class ,'posts']);


// insert dữ liệu listings
Route::get('/post/create', [listingsController::class ,'create'])->middleware('auth');
Route::post('/post', [listingsController::class ,'store'])->middleware('auth');



// tag
Route::get('/tags/create', [tagsController::class,'create'])->middleware('auth');
Route::post('/tags', [tagsController::class,'store'])->middleware('auth');
Route::get('/tags/mana', [tagsController::class,'show'])->middleware('auth');
Route::get('/tags/{tag}/edit', [tagsController::class,'edit'])->middleware('auth');
Route::put('/tags/{tag}', [tagsController::class,'update'])->middleware('auth');
Route::delete('/tags/{tag}/delete', [tagsController::class,'destroy'])->middleware('auth');


Route::get('/post/{listing}/edit', [listingsController::class ,'edit'])->middleware('auth');
Route::put('/post/{listing}', [listingsController::class ,'update'])->middleware('auth');

Route::delete('/post/{listing}', [listingsController::class ,'destroy'])->middleware('auth');

Route::get('/post/{listing}', [listingsController::class ,'show']);


Route::get('/register', [UserController::class ,'create']);
Route::post('/users', [UserController::class ,'store']);

Route::post('/logout', [UserController::class ,'logout'])->middleware('auth');


Route::get('/login', [UserController::class ,'show'])->name('login');


Route::post('/login/auth', [UserController::class ,'auth']);


Route::get('/thanhvien', [listingsController::class ,'thanhvien']);



