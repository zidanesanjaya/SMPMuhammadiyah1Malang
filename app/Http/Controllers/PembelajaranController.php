<?php

namespace App\Http\Controllers;
use App\Models\guru;
use App\Models\list_materi;
use App\Models\materi;
use DB;
use Auth;

use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function list_materi(){
        $list_materi = DB::table('list_materi')->get();
        return view('dashboard_admin.pembelajaran.list_materi',['list_materi'=>$list_materi]);
    }
    public function list_guru(){
        $guru = DB::table('guru')->get();
        return view('dashboard_admin.pembelajaran.guru',['guru'=>$guru]);
    }
    public function materi(){
        $guru = DB::table('guru')->get();
        $list_materi = DB::table('list_materi')->get();
        $materi = DB::table('vw_pembelajaran')->get();
        return view('dashboard_admin.pembelajaran.materi',['guru'=>$guru , 'list_materi'=>$list_materi , 'materi'=>$materi]);
    }
    public function insert_guru(Request $request){
        $guru = new guru();

        $guru->nama_guru = $request->nama_guru;
        $guru->save();

        return redirect()->route('page.list_guru')->with('success','Berhasil Menambahkan Guru Baru');
    }
   
    public function insert_materi(Request $request){
        $materi = new materi();

        $materi->materi_ke = $request->minggu_ke;
        $materi->kelas = $request->list_kelas;
        $materi->id_guru = $request->id_guru;
        $materi->id_list_materi = $request->id_list_materi;

        if($request->hasFile('src1')){
            $filenameWithExt = $request->file('src1')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('src1')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('src1')->storeAs('public/materi',$fileNameToStore);

            $materi->src1 =  $fileNameToStore;
        }
        if($request->hasFile('src2')){
            $filenameWithExt = $request->file('src2')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('src2')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('src2')->storeAs('public/materi',$fileNameToStore);

            $materi->src2 =  $fileNameToStore;
        }
        if($request->hasFile('src3')){
            $filenameWithExt = $request->file('src3')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('src3')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('src3')->storeAs('public/materi',$fileNameToStore);

            $materi->src3 =  $fileNameToStore;
        }

        $materi->save();

        return redirect()->route('page.materi')->with('success','Berhasil Menambahkan Source Materi');
    }
    public function insert_list_materi(Request $request){
        $guru = new list_materi();

        $guru->nama_materi = $request->nama_materi;
        $guru->save();

        return redirect()->route('page.list_materi')->with('success','Berhasil Menambahkan Judul Materi Baru');;
    }
    public function destroy_guru($id){
        guru::destroy($id);
        $materi = DB::table('materi')->where('id_guru',$id)->get();
        foreach($materi as $value){
            materi::destroy($value->id_list_materi);
        }
        return redirect()->route('page.list_guru')->with('success','Success Menghapus Guru');
    }
    public function destroy_list_materi($id){
        list_materi::destroy($id);
        return redirect()->route('page.list_materi')->with('success','Success Menghapus Judul Materi');
    }
    public function destroy_materi($id){
        materi::destroy($id);
        return redirect()->route('page.materi')->with('success','Success Menghapus Source Materi');
    }
}
