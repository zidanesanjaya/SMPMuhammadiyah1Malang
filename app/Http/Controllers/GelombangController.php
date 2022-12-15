<?php

namespace App\Http\Controllers;

use App\Models\Gelombang_Model;
use App\Models\Sosial_Media_Model;
use App\Models\User;
use App\Models\Kelas_Model;
use App\Models\histori_pembayaran;

// use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;
class GelombangController extends Controller
{
    public function index(){
        $gelombang = Gelombang_Model::paginate(5); 
        return view('dashboard_admin.gelombang.gelombang',compact('gelombang'));
    }
    public function list_pembayaran_lunas_page(){
        $listpembayaran = DB::table('vw_pembayaran')->where('status_pembayaran','Sudah Lunas')->get();
        return view('dashboard_admin.gelombang.list_pembayaran_lunas',['listPembayaran'=>$listpembayaran]);
    }
    public function list_pembayaran_belum_lunas_page(){
        $listpembayaran = DB::table('vw_pembayaran')->where('status_pembayaran','Belum Lunas')->get();
        return view('dashboard_admin.gelombang.list_pembayaran_belum_lunas',['listPembayaran'=>$listpembayaran]);
    }
    public function list_pembayaran_page(){
        $listpembayaran = DB::table('vw_histori_pembayaran')->get();
        return view('dashboard_admin.gelombang.histori_pembayaran',['listPembayaran'=>$listpembayaran]);
    }
    public function json_vw_histori_pembayaran($id){
        $listpembayaran = DB::table('vw_histori_pembayaran')->where('id',$id)->first();
        echo json_encode($listpembayaran);
    }
    public function update_histori(Request $request , $id){
        $histori = histori_pembayaran::all()->where('id',$id)->first();

        $histori->status = $request->status;
        $histori->save();

        return redirect()->route('list_pembayaran_page');
    }
    public function gelombang_update_page($id){
        $gelombang= Gelombang_Model::findOrFail($id);
        return view('dashboard_admin.gelombang.gelombang_update',compact('gelombang'));
    }
    public function store_gelombang(Request $request){
        $this->validate($request, [
            'nama_gelombang' => 'required',
            'biaya' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
        ]);        
        Gelombang_Model::create([
            'nama_gelombang'=> $request->nama_gelombang,
            'biaya'=> str_replace("Rp", "", str_replace(".", "", $request->biaya)),
            'mulai'=> $request->mulai,
            'akhir'=> $request->akhir
        ]);

        return redirect()->route('gelombang')->with(['msg' => 'Data Berhasil Disimpan!']);
    }
    public function update_gelombang(Request $request){
        
        $this->validate($request, [
            'nama_gelombang' => 'required',
            'biaya' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
        ]);   
        $gelombang= Gelombang_Model::findOrFail($request->id);
     
        $gelombang->update([
            'nama_gelombang'=> $request->nama_gelombang,
            'biaya'=> str_replace("Rp", "", str_replace(".", "", $request->biaya)),
            'mulai'=> $request->mulai,
            'akhir'=> $request->akhir
        ]);

        return redirect()->route('gelombang')->with(['msg' => 'Data Berhasil Di Update!']);
    }
    public function destroy_gelombang($id){
        Gelombang_Model::destroy($id);
        return redirect()->route('gelombang')->with('msg','Gelombang deleted successfully');    
    }
}
