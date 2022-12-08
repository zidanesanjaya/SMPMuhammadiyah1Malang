<?php

namespace App\Http\Controllers;

use App\Models\Sosial_Media_Model;


// use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;
class SosialMediaController extends Controller
{
    public function sosial_media_page(){
        $sosmed = Sosial_Media_Model::paginate(5); 
        return view('dashboard_admin.sosial_media.sosial_media',compact('sosmed'));
    }
}
