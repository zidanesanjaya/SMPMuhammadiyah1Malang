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
        $nama_kepsek = DB::table('informasi_lainya')->where('type','nama_kepsek')->first();
        $galeri =DB::table('informasi_lainya')->where('type','galeri')->get();
        $cermus = DB::table('cerita_muhasa')->take(3)->get();

        $fotoKepsek = $fotoKepsek == null ? null : $fotoKepsek->lainya;
        $sambutan = $sambutan == null ? null : $sambutan->lainya;
        $nama_kepsek = $nama_kepsek == null ? null : $nama_kepsek->lainya;

        return view('index',['visi'=>$visi , 'misi'=>$misi , 'fotoKepsek' => $fotoKepsek , 'sambutan'=>$sambutan , 'nama_kepsek'=>$nama_kepsek , 'galeri'=> $galeri , 'cermus'=>$cermus]);
    }

    public function detail_cermus($id){
        $cermus = DB::table('cerita_muhasa')->where('id',$id)->first();
        $cermus_list = DB::table('cerita_muhasa')->take(5)->get();
        return view('dashboard_admin.informasi.detail_cermus',['cermus'=>$cermus,'cermus_list'=>$cermus_list]);
    }
    public function cermus(){
        $cermus_list = DB::table('cerita_muhasa')->get();
        return view('cermus',['cermus_list'=>$cermus_list]);
    }
    public function matpel(){
        $matpel = DB::table('vw_matpel')->get();
        return view('matpel',['matpel'=>$matpel]);
    }
    public function detail_mapel($kelas , $mata_pelajaran , $nama_guru){
        $matpel = DB::table('vw_pembelajaran')->where('kelas',$kelas)
                                        ->where('nama_materi',$mata_pelajaran)
                                        ->where('nama_guru',$nama_guru)
                                        ->get();
        return view('permatpel',['matpel'=>$matpel , 'nama_mapel'=>$mata_pelajaran]);
    }
}
