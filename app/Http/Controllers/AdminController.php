<?php

namespace App\Http\Controllers;

use App\Models\Gelombang_Model;
use App\Models\Sosial_Media_Model;
use App\Models\User;
// use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;
class AdminController extends Controller
{
    public function index(){
        $gelombang = Gelombang_Model::paginate(5); 
        return view('dashboard_admin.gelombang',compact('gelombang'));
    }
    public function sosial_media_page(){
        $sosmed = Sosial_Media_Model::paginate(5); 
        return view('dashboard_admin.sosial_media',compact('sosmed'));
    }
    public function user_siswa_page(){
        $listUser = DB::table('vw_user')->where('role','siswa')->get();
        return view('dashboard_admin.user_siswa',compact('listUser'));
    }
    public function user_admin_page(){
        $listUser = DB::table('vw_user')->where('role','admin')->orWhere('role','user')->get();
        return view('dashboard_admin.admin.list_user_admin',compact('listUser'));
    }
    public function gelombang_update_page($id){
        $gelombang= Gelombang_Model::findOrFail($id);
        return view('dashboard_admin.gelombang_update',compact('gelombang'));
    }
    public function store_admin(Request $request)
    {  
        try{
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'role' => 'required',
                'password' => 'required|min:6',
            ]);
    
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => Hash::make($request->password)
            ]); 
        }catch(Exception $e){
            echo 'berhasil';
        }
        return redirect()->route('user_admin.page');
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

        return redirect()->route('gelombang')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy_gelombang($id){
        Gelombang_Model::destroy($id);
        return redirect()->route('gelombang')->with('success','Gelombang deleted successfully');    
    }
}
