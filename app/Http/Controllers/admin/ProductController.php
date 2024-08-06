<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function listProducts()
    {
        $listProduct = Product::paginate(5);
        return view('admin.products.list-product')->with([
            'listProduct' => $listProduct
        ]);
    }
    public function addProduct()
    {
        return view('admin.products.add-product');
    }
    public function addPostProduct(Request $request)
    {
        $linkImage = '';
        if ($request->hasFile('imageSP')) {
            $image = $request->file('imageSP');
            $newName = time() . '.' . $image->getClientOriginalExtension();
            $linkStorage = 'imageProducts/';
            $image->move(public_path($linkStorage), $newName);
            $linkImage = $linkStorage . $newName;
        }

        $data = [
            'name' => $request->nameSP,
            'price' => $request->priceSP,
            'image' => $linkImage
        ];
        Product::create($data);
        return redirect()->route('admin.products.listProducts')->with([
            'message' => 'thêm mới thành công'
        ]);
    }
    public function deleteProduct(string $id){
        $model = Product::query()->findOrFail($id);
        $model->delete();
        if ($model->image !=null && $model->image != '') {
            File::delete(public_path($model->image));
        }
        return back();
    }
    public function detailProduct(string $id){
        $product=Product::query()->findOrFail($id);
        return view('admin.products.detail-product',compact('product'));
    }
    public function updateProduct($id){
        $product=Product::query()->findOrFail($id);
        return view('admin.products.update-product',compact('product'));
    }
    public function updatePatchProduct($id,Request $request){
        
        $product=Product::where('id',$id)->first();
        $linkImage=$product->image;
        if ($request->hasFile('imageSP')) {
            File::delete(public_path($product->image));
            $image=$request->file('imageSP');
            $newName=time().".".$image->getClientOriginalExtension();
            $linkStorage='imageProducts/';
            $image->move(public_path($linkStorage),$newName);
            $linkImage=$linkStorage.$newName;
        }
        $data=[
            'name'=>$request->nameSP,
            'price'=>$request->priceSP,
            'image'=>$linkImage
        ];
        Product::where('id',$id)->update($data);
        return redirect()->route('admin.products.listProducts')->with([
            'message' => 'sửa thành công'
        ]);
    }

}
