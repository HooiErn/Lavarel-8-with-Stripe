<?php

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


Route::get('/addCategory', [App\Http\Controllers\CategoryController::class,'index'])->name('add.Category');


Route::get('/addProduct',[App\Http\Controllers\ManageProductController::class,'index'])->name('add.Product');

Route::post('/addCategory/store',[App\Http\Controllers\CategoryController::class,'add'])->name('addCategory');

Route::post('/addProduct/store',[App\Http\Controllers\ManageProductController::class,'add'])->name('addProduct');

Route::get('/showCategory',[App\Http\Controllers\CategoryController::class,'view'])->name('showCategory');

Route::get('/showProduct',[App\Http\Controllers\ManageProductController::class,'view'])->name('showProduct');

Route::get('/deleteProduct/{id}',[App\Http\Controllers\ManageProductController::class,'delete'])->name('deleteProduct');

Route::get('editProduct/{id}',[App\Http\Controllers\ManageProductController::class,'edit'])->name('editProduct');
//http://localhost/editProduct.php?id=22 localhost/editProduct/22

Route::post('/updateProduct' ,[App\Http\Controllers\ManageProductController::class,'update'])->name('updateProduct');

Route::get('/productDetail/{id}',[App\Http\Controllers\ProductController::class,'productdetail'])->name('product.detail');

Route::get('/products',[App\Http\Controllers\ProductController::class,'viewProduct'])->name('viewProduct');

Route::post('/addCart',[App\Http\Controllers\CartController::class,'add'])->name('add.to.cart');

Route::get('/myCart', [App\Http\Controllers\CartController::class, 'showMyCart'])->name('show.my.cart');

Route::get('/deleteCart/{id}', [App\Http\Controllers\CartController::class, 'delete'])->name('delete.cart.item');

Route::post('\checkout', [App\Http\Controllers\PaymentController::class, 'paymentPost'])->name('payment.post');

Route::post('/products',[App\Http\Controllers\ProductController::class, 'searchProduct'] ) ->name('search.product');

Route::get('/myOrder',[App\Http\Controllers\PaymentController::class, 'viewOrder'])->name('myOrder');

Route::get('/pdfReport',[App\Http\Controllers\PDFController::class,'pdfReport'])->name('pdfReport');

Route::get('/phone',[App\Http\Controllers\ProductController::class,'viewPhone'])->name('phone.products');

Route::get('/computer',[App\Http\Controllers\ProductController::class,'viewComputer'])->name('computer.products');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
