<?php

namespace App\Http\Controllers;
use App\Models\informasi_lainya;
use DB;

use Illuminate\Http\Request;

class informasiController extends Controller
{
    public function visimisi_page(){
        $visimisi = DB::table('informasi_lainya')->where('type','visi')->orwhere('type','misi')->get();
        return view('dashboard_admin.informasi.visimisi',['visimisi'=>$visimisi]);
    }
    public function sambutan(){
        $sambutan = DB::table('informasi_lainya')->where('type','sambutan')->first();
        $foto = DB::table('informasi_lainya')->where('type','foto_kepsek')->first();
        if($foto == null){
            $foto = '0';
        }else{
            $foto = $foto->lainya;
        }
        if($sambutan == null){
            $sambutan == null;
        }else{
            $sambutan = $sambutan->lainya;
        }
        return view('dashboard_admin.informasi.sambutan',['sambutan'=>$sambutan , 'foto'=>$foto]);
    }
    public function insert_visi_misi(Request $request){
        $visimisi = new informasi_lainya();

        if($request->Visi != null){
            $visimisi->type = 'visi';
            $visimisi->lainya = $request->Visi;
            $visimisi->save();
        }

        $visimisi = new informasi_lainya();

        if($request->Misi != null){
            $visimisi->type = 'misi';
            $visimisi->lainya = $request->Misi;
            $visimisi->save();
        }

        return redirect()->route('visimisi_page');
    }

    public function insert_sambutan(Request $request){
        $existing_sambutan = DB::table('informasi_lainya')->where('type','sambutan')->first();
        $existing_kepsek = DB::table('informasi_lainya')->where('type','foto_kepsek')->first();

        if($existing_sambutan == null){
            $sambutan = new informasi_lainya();

            $sambutan->type = 'sambutan';
            $sambutan->lainya = $request->sambutan;
            $sambutan->save();
        }else{
            $sambutan = DB::table('informasi_lainya')->where('type','sambutan')->first();

            $sambutan->type = 'sambutan';
            $sambutan->lainya = $request->sambutan;
            $sambutan->save();
        }

        if($existing_kepsek == null){
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public/lainya',$fileNameToStore);
            
            $kepsek = new informasi_lainya();

            $kepsek->type = 'foto_kepsek';
            $kepsek->lainya = $fileNameToStore;
            $kepsek->save();
        }else{
            $kepsek = DB::table('informasi_lainya')->where('type','foto_kepsek')->first();

            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public/lainya',$fileNameToStore);

            $kepsek->type = 'foto_kepsek';
            $kepsek->lainya = $fileNameToStore;
            $kepsek->save();
        }

        return redirect()->route('sambutan');
    }
}
