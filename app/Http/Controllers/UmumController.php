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
        $cermus = DB::table('cerita_muhasa')->take(3)->orderBy('id', 'desc')->get();

        $jml_mapel = DB::table('informasi_lainya')->where('type','jumlah_mapel')->first();
        $jml_guru = DB::table('informasi_lainya')->where('type','jumlah_guru')->first();
        $jml_siswa = DB::table('informasi_lainya')->where('type','jumlah_siswa')->first();
        $jml_ekskul = DB::table('informasi_lainya')->where('type','jumlah_ekskul')->first();

        // echo json_encode($cermus); die();

        $fotoKepsek = $fotoKepsek == null ? null : $fotoKepsek->lainya;
        $sambutan = $sambutan == null ? null : $sambutan->lainya;
        $nama_kepsek = $nama_kepsek == null ? null : $nama_kepsek->lainya;

        return view('index',['visi'=>$visi , 'misi'=>$misi , 'fotoKepsek' => $fotoKepsek , 'sambutan'=>$sambutan , 'nama_kepsek'=>$nama_kepsek , 'galeri'=> $galeri , 'cermus'=>$cermus , 'jml_siswa'=>$jml_siswa , 'jml_guru'=>$jml_guru , 'jml_mapel'=>$jml_mapel , 'jml_ekskul'=>$jml_ekskul]);
    }

    public function detail_cermus($id){
        $cermus = DB::table('cerita_muhasa')->where('id',$id)->first();
        $cermus_list = DB::table('cerita_muhasa')->take(5)->get();
        return view('dashboard_admin.informasi.detail_cermus',['cermus'=>$cermus,'cermus_list'=>$cermus_list]);
    }
    public function aksi(){
        $timeline = DB::table('informasi_lainya')->where('type','timeline')->orderBy('var5','asc')->get();
        $lomba = DB::table('informasi_lainya')->where('type','lomba')->get();
        $narahubung1 = DB::table('informasi_lainya')->where('type','narahubung1')->first();
        $narahubung2 = DB::table('informasi_lainya')->where('type','narahubung2')->first();
        return view('aksi',['timeline'=>$timeline , 'lomba'=>$lomba , 'narahubung1'=>$narahubung1 ,  'narahubung2'=>$narahubung2]);
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
