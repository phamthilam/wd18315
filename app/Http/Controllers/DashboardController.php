<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $listproduct = Product::get();
        return view('users.dashboard')->with([
            'listproduct' => $listproduct
        ]);
    }
    public function searchProduct(Request $req){
        $products = Product::where('name', 'like', "%$req->search%")->get();

        return response()->json([
            'message'   => 'success',
            'data'  => $products,
            'status_code' => 200
        ], 200);

    }
    public function detailProduct(Request $request){
        
    }
}
