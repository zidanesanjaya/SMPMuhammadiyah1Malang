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

class KelasController extends Controller
{
    public function kelas_page(){
        $listKelas = DB::table('kelas')->get();
        return view('dashboard_admin.pelajaran.list_kelas',compact('listKelas'));
    }
    public function destroy_kelas($id){
        Kelas_Model::destroy($id);
        return redirect()->route('kelas.page')->with('msg','Kelas deleted successfully');    
    }
    public function store_kelas(Request $request){
        $this->validate($request, [
            'nama_kelas' => 'required',
        ]);        
        Kelas_Model::create([
            'nama_kelas'=> $request->nama_kelas,
        ]);

        return redirect()->route('kelas.page')->with(['msg' => 'Data Berhasil Disimpan!']);
    }
}
