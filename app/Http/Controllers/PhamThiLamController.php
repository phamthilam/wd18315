<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhamThiLamController extends Controller
{
    public function phamThiLam(){
        $data=[
            [
                'id'=> 'ph32198',
                'name' =>'Phạm Thị Lâm',
                'majoring' => 'Lập trình web',
                'address' =>'Thái Bình'
            ],
            
        ];
        return view('list-sinhvien')->with([
            'listSinhvien' => $data
        ]);
    }
}
