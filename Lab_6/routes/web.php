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
// =========================== Nhà Cung Cấp ============================== 
Route::get('/danh-sach-nha-cung-cap',[SuppliersController::class, 'listSuppliers']);
Route::get('/them-nha-cung-cap',[SuppliersController::class, 'addSuppliers']);
Route::get('/xoa-nha-cung-cap',[SuppliersController::class, 'deleteSupp']);
Route::post('/them-nha-cung-cap',[SuppliersController::class, 'insertSupp']);
Route::post('/cap-nhat-nha-cung-cap',[SuppliersController::class, 'updateSupp']);

/*
|--------------------- Client ----------------------
*/
Route::get('/', [ClientController::class, 'home']);
Route::get('/gioi-thieu', [ClientController::class, 'about']);
Route::get('/lien-he', [ClientController::class, 'contact']);


Route::get('/cua-hang', [ProductController::class, 'shop']);
Route::get('/san-pham-chi-tiet', [ProductController::class, 'product_detail']);

// =========================== Đăng Kí & Đăng Nhập ==============================
Route::get('/dang-nhap',[AuthController::class, 'login']);
Route::post('/dang-nhap-nguoi-dung',[AuthController::class, 'loginUser']);


Route::get('/dang-ki',[AuthController::class, 'register']);
Route::post('/dang-ki-nguoi-dung',[AuthController::class, 'insertRegister']);