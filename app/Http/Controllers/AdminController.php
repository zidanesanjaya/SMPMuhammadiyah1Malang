<?php

namespace App\Http\Controllers;

use App\Models\Gelombang_Model;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $gelombang = Gelombang_Model::paginate(5); 
        return view('dashboard_admin.gelombang',compact('gelombang'));
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

        return redirect()->route('gelombang')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function update_gelombang(Request $request , $id){
        $this->validate($request, [
            'nama_gelombang' => 'required',
            'biaya' => 'required',
            'mulai' => 'required',
            'akhir' => 'required',
        ]);        
        echo $request->biaya;die();
        Gelombang_Model::update($id,[
            'nama_gelombang'=> $request->nama_gelombang,
            'biaya'=> str_replace("Rp", "", str_replace(".", "", $request->biaya)),
            'mulai'=> $request->mulai,
            'akhir'=> $request->akhir
        ]);

        // return redirect()->route('gelombang')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy_gelombang($id){
        Gelombang_Model::destroy($id);
        return redirect()->route('gelombang')->with('success','Gelombang deleted successfully');    
    }
}
