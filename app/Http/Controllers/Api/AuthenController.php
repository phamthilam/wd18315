<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
public function postLogin(Request $request){
    if (Auth::attempt([ 
        'email'=>$request->email,
        'password'=>$request->password,

    ])) {
        //dang nhap thanh cong
        if(Auth::user()->role=='1'){
            $token=User::find(Auth::id())->createToken('AuthToken')->plainTextToken;
            return response()->json([
                'token'=>$token,
                'message'=>'dang nhap thanh cong',
                'status_code'=>'200'
            ],200);
        } 
    } 
    return response()->json([
        'message'=>'dang nhap that bai',
        'status_code'=>'200'
    ],200);
}
}
