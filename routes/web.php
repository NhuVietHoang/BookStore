<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\WarehouseController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ShopController;
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

//===================================================== backend=============================================
Route::get('/login',[LoginController::class,'loginAdmin']);
Route::post('/login',[LoginController::class,'postLogin']);

Route::get('/logout',[LogoutController::class,'logoutAdmin']);

Route::middleware('auth.admin')->prefix('admin')->group(function() {
    Route::get('/',[DashboardController::class,'getadmin']);

//========================= Catrgory================================
    Route::get('/create-category',[CategoryController::class,'createCategory']);
    Route::post('/create-category',[CategoryController::class,'postCategory']);
    Route::get('/category',[CategoryController::class,'index']);
    Route::get('/category/{id}',[CategoryController::class,'getEditCategory']);
    Route::post('/edit-category',[CategoryController::class,'editCategory']);
    
    Route::delete('/delete-category/{id}',[CategoryController::class,'deleteCategory']);

//=========================== Product===============================
    Route::get('/create-product',[ProductController::class,'createProduct']);
    Route::post('/create-product',[ProductController::class,'postProduct']);
    Route::get('/product',[ProductController::class,'index']);
    Route::delete('/delete-product/{id}',[ProductController::class,'deleteProduct']);
    Route::get('/search',[ProductController::class,'searchProduct']);
    Route::get('/product/{slug}',[ProductController::class,'getProduct']);

    Route::get('/product/{id}',[ProductController::class,'getEditProduct']);

//========================== Order==================================
    Route::get('/rent',[OrderController::class,'rent']);
    Route::get('/order-rent',[OrderController::class,'orderrent']);
    Route::get('/edit-order',[OrderController::class,'editOrder']);
    Route::get('/update-rent',[OrderController::class,'update']);

//========================== warehouse =============================

    Route::get('/warehouse',[WarehouseController::class,'getWarehouse']);
    Route::get('/supplier',[WarehouseController::class,'getSupplier']);
    Route::post('/create-supplier',[WarehouseController::class,'postSupplier']);
});

//=====================================================frontend================================================

Route::get('home',[HomeController::class,'getHome']);
Route::get('register',[RegisterController::class,'getRegister']);
Route::post('postregister',[RegisterController::class,'postRegister']);
Route::post('logincustomer',[LoginController::class,'logincustomer']);
Route::get('logoutcustomer',[LogoutController::class,'logoutcustomer']);
Route::get('shop',[ShopController::class,'getShop']);
Route::get('shop/{slug}',[ShopController::class,'getShopSlug']);
Route::get('shop/product/{id}',[ShopController::class,'getproduct']);

Route::get('addproduct/{id}',[ShopController::class,'addTocart']);

Route::get('checkout',[ShopController::class,'checkout']);






