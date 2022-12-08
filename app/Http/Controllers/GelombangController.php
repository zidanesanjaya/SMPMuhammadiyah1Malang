<?php

namespace App\Http\Controllers;

use App\Models\Gelombang_Model;
use App\Models\Sosial_Media_Model;
use App\Models\User;
use App\Models\Kelas_Model;

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
