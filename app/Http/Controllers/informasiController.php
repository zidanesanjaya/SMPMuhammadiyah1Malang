<?php

namespace App\Http\Controllers;
use App\Models\informasi_lainya;
use App\Models\cerita_muhasa;
use DB;
use Auth;

use Illuminate\Http\Request;

class informasiController extends Controller
{
    public function visimisi_page(){
        $visimisi = DB::table('informasi_lainya')->where('type','visi')->orwhere('type','misi')->get();
        return view('dashboard_admin.informasi.visimisi',['visimisi'=>$visimisi]);
    }
    public function galeri(){
        $galeri = DB::table('informasi_lainya')->where('type','galeri')->get();
        return view('dashboard_admin.informasi.galeri',['galeri'=>$galeri]);
    }
    public function cerita_muhasa(){
        $cerita_muhasa = DB::table('cerita_muhasa')->get();
        return view('dashboard_admin.informasi.cermus',['cermus'=>$cerita_muhasa]);
    }
    public function cerita_muhasa_edit($id){
        $cerita_muhasa = DB::table('cerita_muhasa')->where('id',$id)->first();
        return view('dashboard_admin.informasi.edit_cermus',['cermus'=>$cerita_muhasa]);
    }
    public function destroy_galeri($id){
        informasi_lainya::destroy($id);
        return redirect()->route('galeri')->with('msg-green','Success Menghapus Foto');
    }
    public function destroy_cermus($id){
        cerita_muhasa::destroy($id);
        return redirect()->route('cermus')->with('msg-red','Success Menghapus Foto');
    }
    public function destroy_visimisi($id){
        informasi_lainya::destroy($id);
        return redirect()->route('visimisi_page')->with('msg-green','Success Menghapus Visi / Misi');
    }

    public function sambutan(){
        $sambutan = DB::table('informasi_lainya')->where('type','sambutan')->first();
        $nama_kepsek = DB::table('informasi_lainya')->where('type','nama_kepsek')->first();
        $foto = DB::table('informasi_lainya')->where('type','foto_kepsek')->first();
        if($foto == null){
            $foto = '0';
        }else{
            $foto = $foto->lainya;
        }
        if($nama_kepsek == null){
            $nama_kepsek = '-';
        }else{
            $nama_kepsek = $nama_kepsek->lainya;
        }
        if($sambutan == null){
            $sambutan == null;
        }else{
            $sambutan = $sambutan->lainya;
        }
        return view('dashboard_admin.informasi.sambutan',['sambutan'=>$sambutan , 'foto'=>$foto , 'nama_kepsek'=>$nama_kepsek]);
    }
    public function insert_galeri(Request $request){
        $filenameWithExt = $request->file('foto')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('foto')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('foto')->storeAs('public/lainya',$fileNameToStore);

        $galeri = new informasi_lainya();
        $galeri->type = 'galeri';
        $galeri->lainya = $fileNameToStore;
        $galeri->save();

        return redirect()->route('galeri')->with('msg-green','Success Menambahkan Foto');
    }

    public function insert_cermus(Request $request){
        $filenameWithExt = $request->file('foto')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('foto')->getClientOriginalExtension();
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('foto')->storeAs('public/lainya',$fileNameToStore);

        $cerita_muhasa = new cerita_muhasa();
        $cerita_muhasa->foto = $fileNameToStore;
        $cerita_muhasa->judul = $request->judul;
        $cerita_muhasa->deskripsi = $request->deskripsi;
        $cerita_muhasa->created_by = Auth::user()->name;
        $cerita_muhasa->created_at = date("Y-m-d");
        $cerita_muhasa->save();

        return redirect()->route('cermus')->with('msg-green','Success Menambahkan Cerita Muhasa');
    }
    public function update_cermus(Request $request , $id){
        $cerita_muhasa = cerita_muhasa::findOrFail($id);

        if($request->hasFile('foto')){
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public/lainya',$fileNameToStore);

            $cerita_muhasa->foto = $fileNameToStore;
        }
       

        $cerita_muhasa->judul = $request->judul;
        $cerita_muhasa->deskripsi = $request->deskripsi;
        $cerita_muhasa->updated_by = Auth::user()->name;
        $cerita_muhasa->updated_at = date("Y-m-d");
        $cerita_muhasa->save();

        return redirect()->route('cermus')->with('msg-green','Success Edit Cerita Muhasa');
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
        $existing_nama_kepsek = DB::table('informasi_lainya')->where('type','nama_kepsek')->first();

        if($existing_nama_kepsek == null){
            $nama_kepsek = new informasi_lainya();

            $nama_kepsek->type = 'nama_kepsek';
            $nama_kepsek->lainya = $request->nama;
            $nama_kepsek->save();
        }else{
            $nama_kepsek_ = DB::table('informasi_lainya')->where('type','nama_kepsek')->first();
            $nama_kepsek = informasi_lainya::findOrFail($nama_kepsek_->id);
            $nama_kepsek->type = 'nama_kepsek';
            $nama_kepsek->lainya = $request->nama;
            $nama_kepsek->save();
        }

        if($existing_sambutan == null){
            $sambutan = new informasi_lainya();

            $sambutan->type = 'sambutan';
            $sambutan->lainya = $request->sambutan;
            $sambutan->save();
        }else{
            $sambutan_ = DB::table('informasi_lainya')->where('type','sambutan')->first();
            $sambutan = informasi_lainya::findOrFail($sambutan_->id);
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
        }else if($request->hasFile('foto')){
            $kepsek_ = DB::table('informasi_lainya')->where('type','foto_kepsek')->first();
            $kepsek = informasi_lainya::findOrFail($kepsek_->id);

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

        return redirect()->route('sambutan')->with('msg-green','Sukses Menambahkan / Mengupdate Data');
    }
}
