<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function pembayaran_page(){
        return view('dashboard_ppdb.pembayaran');
    }
}
