<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        // return "<h1>Halo aku adalah seorang kapiten</h1>";
        $nama = "Diki anaknya Budi";
        $umur = 35 ;
        $alamat = "Surabaya (Kota paling L)";
        $matkul = ["Algorritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
        return view('/biodata',['nama'=>$nama, 'umur'=>$umur, 'alamat'=>$alamat, 'matkul'=>$matkul]);
    }

    public function welcome(){
        return view('/welcome');
    }

}
