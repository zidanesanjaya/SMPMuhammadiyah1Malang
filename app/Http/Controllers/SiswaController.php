<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function pembayaran_page(){
        return view('dashboard_ppdb.pembayaran');
    }
    public function profile_page(){
        return view('dashboard_ppdb.profile');
    }
    public function form_wajib_page(){
        return view('dashboard_ppdb.form_wajib');
    }
}
