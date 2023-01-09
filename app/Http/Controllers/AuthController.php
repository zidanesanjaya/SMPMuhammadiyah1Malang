<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Models\Gelombang_Model;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login_ppdb');
    }  
    public function login_admin()
    {
        return view('auth.login_admin');
    }  
    public function registration()
    {
        return view('auth.registration_ppdb');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if($user->role == 'siswa'){
                return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
            }else{
                return redirect("login")->withErrors(['auth' => ['Halaman Ini Hanya Untuk Siswa']]);
            }
        }
        return redirect("login")->withErrors(['auth' => ['Email Atau Password Salah']]);
    }
    public function login_admin_auth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if($user->role == 'admin'){
                return redirect()->intended('dashboard_admin')
                ->withSuccess('Signed in');
            }else if($user->role == 'user'){
                return redirect()->intended('dashboard_admin')
                ->withSuccess('Signed in');
            }else{
                return redirect("login_admin")->withErrors(['auth' => ['Halaman Ini Hanya Login Khusus Admin Dan User(Karyawan)']]);
            }
        }
        return redirect("login_admin")->withErrors(['auth' => ['Email Atau Password Salah']]);
    }
    public function dashboard()
    {
        return view('dashboard_ppdb.dashboard');  
    }
    public function dashboard_admin()
    {
        $sizeUsers= sizeOf(DB::table('users')->where('role','siswa')->get());
        $sizeadmin= sizeOf(DB::table('users')->where('role','admin')->get());
        $sizeuser= sizeOf(DB::table('users')->where('role','user')->get());
        return view('dashboard_admin.dashboard',['sizeUsers'=> $sizeUsers,'sizeAdmin'=> $sizeadmin , 'sizeUser'=> $sizeuser]);
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'role' => 'siswa',
        'password' => Hash::make($data['password'])
      ]);
    }    
    public function Registration_Ppdb(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $check = User::all()->where('email',$request->email)->first();
        $gelombang = Gelombang_Model::all();
        if($check == null){
            $data = $request->all();
            $check = $this->create($data);
            if($check && $gelombang != null){
                $id_gelombang = null;
                foreach($gelombang as $value){
                    $id_gelombang = DB::select('SELECT * FROM gelombang WHERE id = ? AND DATE(?) BETWEEN ? AND ?',[ $value->id,date('Y-m-d'), $value->mulai , $value->akhir]);
                    if($id_gelombang != null){
                        $user = User::all()->where('email',$request->email)->first();
                        $user->id_gelombang = $id_gelombang[0]->id;
                        $user->save();
                    }
                }           
            }
                
            return redirect("login")->withErrors(['success' => ['Anda Sudah Berhasil Mendaftar']]);
        }else{
            return redirect("register")->withErrors(['auth' => ['email sudah terdaftar']]);
        }
    }   
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
