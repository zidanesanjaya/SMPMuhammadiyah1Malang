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
}
