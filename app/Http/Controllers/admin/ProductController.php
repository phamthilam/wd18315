<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function listProducts(){
        $listProduct = Product::all();
        return view('admin.products.list-product')->with([
            'listProduct'=>$listProduct
        ]);
    }
    public function addProduct(){
        return view('admin.products.add-product');
    } 
    public function addPostProduct(Request $request){
        $linkImage='';
        if ($request->hasFile('file')) {
            $image=$request->file('file');
            $newName=time().'.'.$image->getClientOriginalExtension();
            $linkStorage='imageProducts/';
            $image->move(public_path($linkStorage),$newName);
            $linkImage=$linkStorage.$newName;
        }
      
        $data=[
            'name'=>$request->nameSP,
            'price'=>$request->priceSP,
            'image'=>$linkImage
        ];
        Product::create($data);
        return redirect()->route('admin.products.listProducts');
    }
}
