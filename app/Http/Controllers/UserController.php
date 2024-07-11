<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function listUsers(){
        $data=DB::table('users')
        ->join('phongban','users.phongban_id','=','phongban.id')
        ->select('users.name','users.email','users.id','phongban.ten_donvi','phongban.id as idPhongban')
        ->get();
        return view('users/list-user')->with([
            'listUsers'=> $data
        ]);
    }
    public function addUsers(){
        $phongBan=DB::table('phongban')
        ->select('id','ten_donvi')
        ->get();
        return view('users/add-user')->with([
            'phongBan'=>$phongBan
        ]);
    }
    public function addPostUsers(Request $req){
        $data=[
            'name' => $req->name, //$req->name ~ $_POST['name']
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'created_at' =>Carbon::now(),
            'updated_at' =>Carbon::now(),

        ];
            DB::table('users')->insert($data);
            return redirect()->route('users.listUsers');
    }
    public function deleteUser($idUser){
        DB::table('users')->where('id',$idUser)->delete();
        return redirect()->route('users.listUsers');
    }
    public function updateUser($idUser){
        $phongBan=DB::table('phongban')->select('id','ten_donvi')->get();
        $user= DB::table('users')->where('id', $idUser)->first();
        return view('users/update-users')->with([
            'phongBan'=>$phongBan,
            'user'=> $user
        ]);
    }
    public function updatePostUsers(Request $req){
        $data=[
            'name' => $req->name, //$req->name ~$_POST['name']
            'email' => $req->email,
            'phongban_id' => $req->phongban,
            'tuoi' => $req->tuoi,
            'songaynghi' => $req->songaynghi,
            'updated_at' =>Carbon::now(),
        ];
        DB::table('users')->where('id',$req->idUser)->update($data);
        return redirect()->route('users.listUsers');
    }
}
