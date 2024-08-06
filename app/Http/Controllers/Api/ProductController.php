<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getListProduct() {
        $listProduct=Product::select('id','name','image')->get();
        return response()->json([
            'data'=>$listProduct,
            'message'=>'success',
            'status_code'=>'200'
        ],200);
    }
    public function getProduct($idProduct){
        $product=Product::select('id','name','image')->find($idProduct);
        return response()->json([
            'data'=>$product,
             'message'=>'success',
            'status_code'=>'200'
        ],200);

    }
    public function addProduct(Request $request){
        // $data=json_decode($request->getContent());
        $data=[
            'name'=>$request->name,
            'price'=>$request->price,
        ];
        $product=Product::create($data);
        return response()->json([
            'data'=>$product,
             'message'=>'success',
            'status_code'=>'200'
        ],200);
    }
    public function updateProduct(Request $request){
        $data=[
            'name'=>$request->name,
            'price'=>$request->price,
        ];
        $product=Product::find($request->idProduct);
        $product->update($data);
        return response()->json([
            'data'=>$product,
             'message'=>'success',
            'status_code'=>'200'
        ],200);
    }
    public function deleteProduct(Request $request){
        Product::find($request->idProduct)->delete();
        return response()->json([
             'message'=>'success',
            'status_code'=>'200'
        ],200);
    }
}
