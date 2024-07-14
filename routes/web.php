<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\PhamThiLamController;
// use App\Http\Controllers\UserController;


// GET, PUT, PATCH, POST, DELETE
// base url: http://127.0.0.1:8000/test
//Đặt tên: danh-sach-san-pham
// Route::get('test',function () {
//     echo '123';
// });

// Route::get('/',function () {
//     echo 'trang chủ';
// });

// Route::get('list-products',[ProductController::class, 'showProduct']);

// // truyền dữ liệu từ route sang controller

// //slug
// //http://127.0.0.1:8000/get-product/3/iphone
// Route::get('get-product/{id}/{name?}',[ProductController::class, 'getProduct']);

// //params
// //http://127.0.0.1:8000/update-product?id=3&name=iphone
// Route::get('update-product',[ProductController::class, 'updateProduct']);
// Route::get('thongtinsv',[PhamThiLamController::class, 'phamThiLam']);
// Route::get('query-builder',[ProductController::class, 'queryBuilder']);

// crud bang users 
// Route::group(['prefix' => 'users','as'=>'users.' ],function(){
//     Route::get('list-users', [UserController::class,'listUsers'])->name('listUsers');
//     Route::get('add-users', [UserController::class,'addUsers'])->name('addUsers');
//     Route::post('add-users', [UserController::class,'addPostUsers'])->name('addPostUsers');
//     Route::get('delete-users/{idUser}', [UserController::class,'deleteUser'])->name('deleteUser');
//     Route::get('update-users/{idUser}', [UserController::class,'updateUser'])->name('updateUser');
//     Route::post('update-users', [UserController::class,'updatePostUsers'])->name('updatePostUsers');
// });

Route :: group(['prefix'=>'product', 'as'=>'product.'],function(){
    Route::get('list-pro',[ProductController::class,'listProduct'])->name('listProduct');
    Route::get('add-pro',[ProductController::class,'addProduct'])->name('addProduct');
    Route::post('add-pro',[ProductController::class,'addPostProduct'])->name('addPostProduct');
    Route::get('delete-pro/{idPro}',[ProductController::class,'deleteProduct'])->name('deleteProduct');
    Route::get('update-pro/{idPro}',[ProductController::class,'updateProduct'])->name('updateProduct');
    Route::post('update-pro',[ProductController::class,'updatePostProduct'])->name('updatePostProduct');
    
});
Route::get('test', function(){
    return view('admin.products.list-product');
});
