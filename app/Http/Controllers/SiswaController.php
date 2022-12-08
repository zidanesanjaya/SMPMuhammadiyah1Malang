<?php

namespace App\Http\Controllers;

use App\Models\Gelombang_Model;
use App\Models\Sosial_Media_Model;
use App\Models\User;
use App\Models\Kelas_Model;
use Auth;

// use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;

class SiswaController extends Controller
{
    public function pembayaran_page(){
        return view('dashboard_ppdb.pembayaran');
    }
    public function profile_page(){
        $user = Auth::user();
        return view('dashboard_ppdb.profile');
    }
    public function user_siswa_page(){
        $listUser = DB::table('vw_user')->where('role','siswa')->get();
        return view('dashboard_admin.siswa.user_siswa',compact('listUser'));
    }
    public function form_wajib_page(){
        return view('dashboard_ppdb.form_wajib');
    }
    public function update_profile(Request $request){
        $this->validate($request, [
            'nama_lengkap' => 'required',
            'telepon' => 'required',
        ]);  

        $user= User::findOrFail($request->id_user);

        if($request->hasFile('foto')){
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public/avatars',$fileNameToStore);

            $user->nama_lengkap = $request->input('nama_lengkap');
            $user->telepon = $request->input('telepon');
            $user->path_foto =  $fileNameToStore;
        }else{
            $user->nama_lengkap = $request->input('nama_lengkap');
            $user->telepon = $request->input('telepon');
        }

        $user->save();

        return redirect()->route('profile');
    }

    public function update_password_siswa(Request $request , $id){
        $this->validate($request, [
            'password' => 'required',
        ]);  
        $user= User::findOrFail($id);

        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('profile');

    }
}
