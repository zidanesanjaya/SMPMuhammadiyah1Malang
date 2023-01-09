<?php

namespace App\Http\Controllers;

use App\Models\Gelombang_Model;
use App\Models\Sosial_Media_Model;
use App\Models\User;
use App\Models\Kelas_Model;
use App\Models\detail_siswa;
use App\Models\detail_orang_tua;
use App\Models\ayah;
use App\Models\ibu;
use App\Models\wali;
use App\Models\pembayaran;
use App\Exports\ExportUser;
use App\Imports\ImportUser;
use App\Imports\importDetail;
use App\Imports\importDetailOrangTua;
use App\Imports\ImportAyah;
use App\Imports\ImportIbu;
use App\Imports\ImportWali;

use Maatwebsite\Excel\Facades\Excel;


// use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;
class AdminController extends Controller
{
    public function user_admin_page(){
        $listUser = DB::table('vw_user')->where('role','admin')->orWhere('role','user')->get();
        return view('dashboard_admin.admin.list_user_admin',compact('listUser'));
    }
    
    public function admin_update_page($id){
        $admin= User::findOrFail($id);
        return view('dashboard_admin.admin.edit_admin',compact('admin'));
    }
    public function get_json_detail_siswa($id){
        $listUser = DB::table('vw_detail_siswa')->where('id',$id)->where('role','siswa')->first();
        echo json_encode($listUser);
    }
    public function get_json_gelombang(){
        $gelombang = DB::table('gelombang')->get();
        echo json_encode($gelombang);
    }
    public function reset_password($id){
        $user =  User::all()->where('id',$id)->first();        
        $user->password = Hash::make('password1234');
        $user->save();

        return redirect('user_siswa')->with('reset', 'Berhasil Reset Password');
    }
    public function destroy_user($id){
        $ayah = ayah::all()->where('id_user',$id)->first();
        if($ayah){
            $ayah->delete();
        }

        $ibu = ibu::all()->where('id_user',$id)->first();
        if($ibu){
            $ibu->delete();
        }

        $wali = wali::all()->where('id_user',$id)->first();
        if($wali){
            $wali->delete();
        }
        $detail_orang_tua = detail_orang_tua::all()->where('id_user',$id)->first();
        if($detail_orang_tua){
            $detail_orang_tua->delete();
        }
        $detail_siswa = detail_siswa::all()->where('id_user',$id)->first();
        if($detail_siswa){
            $detail_siswa->delete();
        }
        User::destroy($id);

        return redirect('user_siswa')->with('hapus', 'Berhasil Hapus User');
    }
    public function update_gelombang_user(Request $request , $id){
        $this->validate($request,[
            'gelombang' => 'required',
        ]);
        $user =  User::all()->where('id',$id)->first();

        $gelombang_temp = Gelombang_Model::all()->where('id',$request->gelombang)->first();     

        $user->id_gelombang = $request->gelombang;
        $user->save();



        return redirect('user_siswa')->with('gelombang', 'Berhasil Edit Gelombang');
    }
    public function store_admin(Request $request)
    {  
        try{
            $this->validate($request,[
                'name' => 'required',
                'email' => 'required|email',
                'role' => 'required',
                'password' => 'required|min:6',
            ]);
            $check = User::all()->where('email',$request->email)->first();
            if($check == null){
                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'role' => $request->role,
                    'password' => Hash::make($request->password)
                ]); 
                return redirect()->route('user_admin.page')->with('new', 'Data Baru Ditambahkan');
            }else{
                return redirect()->route('user_admin.page')->with('error', 'Email Sudah Terdaftar');
            }
           
        }catch(Exception $e){
            echo 'berhasil';
        }
    }
    
    public function update_admin(Request $request){
        
        $this->validate($request, [
            'role' => 'required',
        ]);   
        $user = User::findOrFail($request->id);
     
        if($request->password == null){
            $user->update([
                'role'=> $request->role,
            ]);
        }else{
            $user->update([
                'role'=> $request->role,
                'password'=> Hash::make($request->password)
            ]);
        }
        return redirect()->route('user_admin.page')->with('status', 'Data Berhasil Di Update');;
    }
    public function exportUsers(Request $request){
        return Excel::download(new ExportUser, 'list-siswa.xlsx');
    }
    public function importView(Request $request){
        return view('importFile');
    }

    public function import(Request $request){
        Excel::import(new ImportUser, $request->file('file')->store('files'));
        Excel::import(new importDetail, $request->file('file')->store('files'));
        Excel::import(new importDetailOrangTua, $request->file('file')->store('files'));
        Excel::import(new importAyah, $request->file('file')->store('files'));
        Excel::import(new importIbu, $request->file('file')->store('files'));
        Excel::import(new importWali, $request->file('file')->store('files'));

        return redirect()->back();
    }
}
