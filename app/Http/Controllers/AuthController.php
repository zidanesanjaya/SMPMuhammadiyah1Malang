<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            }else{
                return redirect("login_admin")->withErrors(['auth' => ['Halaman Ini Hanya Login Khusus Admin Dan User(Karyawan)']]);
            }
        }
        return redirect("login_admin")->withErrors(['auth' => ['Email Atau Password Salah']]);
    }
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard_ppdb.dashboard');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    public function dashboard_admin()
    {
        if(Auth::check()){
            return view('dashboard_admin.dashboard');
        }
  
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
