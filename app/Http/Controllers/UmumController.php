<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\informasi_lainya;
use DB;

class UmumController extends Controller
{
    public function index(){
        $visi = DB::table('informasi_lainya')->where('type','visi')->get();
        $misi = DB::table('informasi_lainya')->where('type','misi')->get();
        $fotoKepsek = DB::table('informasi_lainya')->where('type','foto_kepsek')->first();
        $sambutan = DB::table('informasi_lainya')->where('type','sambutan')->first();
        return view('index',['visi'=>$visi , 'misi'=>$misi , 'fotoKepsek' => $fotoKepsek , 'sambutan'=>$sambutan]);
    }
}
