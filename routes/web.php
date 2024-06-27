<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PhamThiLamController;


// GET, PUT, PATCH, POST, DELETE
// base url: http://127.0.0.1:8000/test
//Đặt tên: danh-sach-san-pham
Route::get('test',function () {
    echo '123';
});

Route::get('/',function () {
    echo 'trang chủ';
});

Route::get('list-products',[ProductController::class, 'showProduct']);

// truyền dữ liệu từ route sang controller

//slug
//http://127.0.0.1:8000/get-product/3/iphone
Route::get('get-product/{id}/{name?}',[ProductController::class, 'getProduct']);

//params
//http://127.0.0.1:8000/update-product?id=3&name=iphone
Route::get('update-product',[ProductController::class, 'updateProduct']);
Route::get('thongtinsv',[PhamThiLamController::class, 'phamThiLam']);