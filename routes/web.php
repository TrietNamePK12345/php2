<?php
/*
| Use Controller
|--------------------------------------------------------------------------
*/
use App\controllers\AdminController;
use App\controllers\AuthController;
use App\Controllers\ClientController;
use App\controllers\ProductController;
/*
|--------------------------------------------------------------------------
*/
use App\core\Route;


/*
|--------------------- ADMIN ----------------------
*/
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/danh-sach-san-pham', [AdminController::class, 'list_product']);

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

