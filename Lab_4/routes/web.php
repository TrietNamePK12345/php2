<?php
/*
| Use Controller
|--------------------------------------------------------------------------
*/
use App\HTTP\Controllers\AdminController;
use App\HTTP\Controllers\AuthController;
use App\HTTP\Controllers\ClientController;
use App\HTTP\Controllers\ProductController;
use App\HTTP\Controllers\SuppliersController;
/*
|--------------------------------------------------------------------------
*/

use App\Core\Route;

/*
|--------------------- ADMIN ----------------------
*/
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/danh-sach-san-pham', [AdminController::class, 'list_product']);
Route::get('/danh-sach-nha-cung-cap',[SuppliersController::class, 'listSuppliers']);

/*
|--------------------- Client ----------------------
*/
Route::get('/', [ClientController::class, 'home']);
Route::get('/gioi-thieu', [ClientController::class, 'about']);
Route::get('/lien-he', [ClientController::class, 'contact']);


Route::get('/cua-hang', [ProductController::class, 'shop']);
Route::get('/san-pham-chi-tiet', [ProductController::class, 'product_detail']);


Route::get('/dang-nhap',[AuthController::class, 'login']);
Route::post('/dang-nhap',[AuthController::class, 'login']);


Route::get('/dang-ki',[AuthController::class, 'register']);
Route::post('/dang-ki',[AuthController::class, 'register']);

