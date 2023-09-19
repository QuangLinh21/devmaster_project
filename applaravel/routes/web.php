<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/',[UserController::class,'index']);

// Route::get('/hoten/{ten}/{tuoi}',[UserController::class,'se_name']);
// Route::get('/',[UserController::class,'list_user']);

Route::get('/admins',[AdminController::class,'home']);
Route::get('/list-category',[CategoryController::class,'list_category'])->name('danh-sach-DMSP');
Route::get('/list-product',[ProductController::class,'list_product'])->name('danh sách sản phẩm');
Route::get('/new',[CategoryController::class,'new'])->name('Tin tức');
