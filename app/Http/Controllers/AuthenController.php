<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function postLogin(UserLoginRequest $request){
        
        if (Auth::attempt([ 
            'email'=>$request->email,
            'password'=>$request->password,

        ])) {
            //dang nhap thanh cong
            if(Auth::user()->role=='1'){
                return redirect()->route('admin.products.listProducts');
            } else{
                
            }
            
        } else{
//dawng nhap that bai
            return redirect()->back()->with([
                'message'=>'eamil or pass sai'
            ]);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with([
            'message'=>'dang xuat thanh cong'
        ]);
    }
    public function register(){
        return view('admin.register');
    }
    public function postRegister(Request $request){
        $check=User::where('email',$request->email)->exists();
        if (!$check) {
            if($request->password ===$request->confirmpassword){
                  $data=[
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password,
            ];
            User::create($data);
            return redirect()->route('login')->with([
                'message'=>'ddawng kys thanh cong'

            ]);
            }else{
                return redirect()->back()->with([
                    'message'=>' pass ko thanh cong'
    
                ]);
            }
          
        } else{
            return redirect()->back()->with([
                'message'=>'email ddax ton tai'
            ]);
        }
    }
}
