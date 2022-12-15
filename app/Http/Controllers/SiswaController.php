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
use App\Models\histori_pembayaran;

use Auth;

// use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Hash;

class SiswaController extends Controller
{
    public function pembayaran_page(){
        $user = Auth::user();
        $pembayaran = DB::table('vw_pembayaran')->where('id_user',Auth::user()->id)->get();
        $Historipembayaran = DB::table('histori_pembayaran')->where('id_user',Auth::user()->id)->get();
        $listUser = DB::table('vw_user')->where('id',$user->id)->first();
        return view('dashboard_ppdb.pembayaran',['listUser'=>$listUser , 'pembayaran'=>$pembayaran , 'historiPembayaran'=>$Historipembayaran]);
    }
    public function profile_page(){
        $user = Auth::user();
        return view('dashboard_ppdb.profile');
    }
    public function user_siswa_page(){
        $listUser = DB::table('vw_user')->where('role','siswa')->get();
        $detail_siswa = DB::table('detail_siswa')->where('id_user',Auth::user()->id)->first();
        return view('dashboard_admin.siswa.user_siswa',compact('listUser'));
    }
    public function form_wajib_page(){
        return view('dashboard_ppdb.form_wajib');
    }
    public function form_wajib_orang_tua_page(){
        $detail_ortu = DB::table('detail_orang_tua')->where('id_user',Auth::user()->id)->first();
        $ayah = DB::table('ayah')->where('id_user',Auth::user()->id)->first();
        $ibu = DB::table('ibu')->where('id_user',Auth::user()->id)->first();
        $wali = DB::table('wali')->where('id_user',Auth::user()->id)->first();

        return view('dashboard_ppdb.form_wajib_orang_tua',['detail_ortu'=>$detail_ortu , 'ayah'=>$ayah , 'ibu'=>$ibu , 'wali'=>$wali]);
    }
    public function insert_pembayaran(Request $request){
        $this->validate($request, [
            'setoran' => 'required',
            'bukti' => 'required',
        ]);  

        try{
            $filenameWithExt = $request->file('bukti')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bukti')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('bukti')->storeAs('public/bukti',$fileNameToStore);
    
            $histori = new histori_pembayaran();
            $histori->id_user = Auth::user()->id;
            $histori->pembayaran = $request->setoran;
            $histori->status = 'MENUNGGU';
            $histori->tanggal_pembayaran = date("Y-m-d");
            $histori->path_foto = $fileNameToStore;

            $histori->save();
        }catch(Exception $e){
            return redirect()->route('pembayaran')->with('msg-red', 'Anda Gagal Upload Pembayaran , Silahkan Coba Lagi');
        }
        return redirect()->route('pembayaran')->with('msg-green', 'Anda Berhasil Upload Pembayaran');
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

        return redirect()->route('profile')->with('success', 'Anda Berhasil Update Profile');
    }

    public function update_password_siswa(Request $request , $id){
        $this->validate($request, [
            'password' => 'required',
        ]);  
        $user= User::findOrFail($id);

        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->route('profile')->with('success', 'Anda Berhasil Update Password');

    }

    public function insert_detail(Request $request){
        $this->validate($request, [
            'nama_panggilan' => 'required',
            'tempat_lahir_siswa' => 'required',
            'tanggal_lahir_siswa' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'cita_cita' => 'required',
            'gol_darah' => 'required',
            'hobi' => 'required',
            'alamat' => 'required',
            'tinggal_dengan' => 'required',
            'jumlah_saudara' => 'required',
            'anak_ke' => 'required',
            'berat_badan' => 'required',
            'telepon' => 'required',
            'sekolah_asal' => 'required',
        ]);  

        $detail_siswa = new detail_siswa();

        $detail_siswa->id_user = Auth::user()->id;
        $detail_siswa->nama_panggilan = $request->nama_panggilan;
        $detail_siswa->tempat_lahir = $request->tempat_lahir_siswa;
        $detail_siswa->tanggal_lahir = $request->tanggal_lahir_siswa;
        $detail_siswa->jenis_kelamin = $request->jenis_kelamin;
        $detail_siswa->agama = $request->agama;
        $detail_siswa->alamat = $request->alamat;
        $detail_siswa->tinggal_dengan = $request->tinggal_dengan;
        $detail_siswa->gol_darah = $request->gol_darah;
        $detail_siswa->cita_cita = $request->cita_cita;
        $detail_siswa->hobi = $request->hobi;
        $detail_siswa->telepon = $request->telepon;
        $detail_siswa->jumlah_saudara = $request->jumlah_saudara;
        $detail_siswa->anak_ke = $request->anak_ke;
        $detail_siswa->berat_badan = $request->berat_badan;
        $detail_siswa->bakat = $request->bakat;
        $detail_siswa->sekolah_asal = $request->sekolah_asal;
        $detail_siswa->save();

        return redirect('form_wajib')->with('success', 'Anda Berhasil Mengisi Form Siswa');
    }

    public function detail_siswa(){
        $detail_siswa = DB::table('detail_siswa')->where('id_user',Auth::user()->id)->first();
        return json_encode($detail_siswa);
    }

    public function insert_orang_tua(Request $request){

    

        if($request->nik_ayah != null && $request->nama_ayah != null && $request->nik_ibu != null && $request->nama_ibu != null){
            $detail_orang_tua = new detail_orang_tua();

            $detail_orang_tua->id_user = Auth::user()->id;
            $detail_orang_tua->provinsi = $request->provinsi;
            $detail_orang_tua->kabupaten = $request->kota;
            $detail_orang_tua->kecamatan = $request->kecamatan;
            $detail_orang_tua->kelurahan = $request->kelurahan;
            $detail_orang_tua->telepon_orang_tua = $request->telepon_orang_tua;
            $detail_orang_tua->alamat = $request->alamat_orang_tua;
            $detail_orang_tua->save();

            $ayah = new ayah();

            $ayah->id_user = Auth::user()->id;
            $ayah->nik = $request->nik_ayah;
            $ayah->nama = $request->nama_ayah;
            $ayah->pendidikan = $request->pendidikan_ayah;
            $ayah->pekerjaan = $request->pekerjaan_ayah;
            $ayah->tempat_lahir = $request->tempat_lahir_ayah;
            $ayah->tanggal_lahir = $request->tanggal_lahir_ayah;
            $ayah->penghasilan = $request->penghasilan_ayah;
            $ayah->save();

            $ibu = new ibu();
            $ibu->id_user = Auth::user()->id;
            $ibu->nik = $request->nik_ibu;
            $ibu->nama = $request->nama_ibu;
            $ibu->pendidikan = $request->pendidikan_ibu;
            $ibu->pekerjaan = $request->pekerjaan_ibu;
            $ibu->tempat_lahir = $request->tempat_lahir_ibu;
            $ibu->tanggal_lahir = $request->tanggal_lahir_ibu;
            $ibu->penghasilan = $request->penghasilan_ibu;
            $ibu->save();
        }else{
            return redirect('form_wajib_orang_tua')->with('errors', 'Anda Harus Mengisikan Minimal form Ayah dan Ibu');;
        }

        if($request->nama_wali != null && $request->nik_wali != null){
            $wali = new wali();
            $wali->id_user = Auth::user()->id;
            $wali->nik = $request->nik_wali;
            $wali->nama = $request->nama_wali;
            $wali->pendidikan = $request->pendidikan_wali;
            $wali->pekerjaan = $request->pekerjaan_wali;
            $wali->tempat_lahir = $request->tempat_lahir_wali;
            $wali->tanggal_lahir = $request->tanggal_lahir_wali;
            $wali->penghasilan = $request->penghasilan_wali;
            $wali->save();
        }

        return redirect('form_wajib_orang_tua')->with('success', 'Anda Berhasil Mengisi Form Orang Tua / Wali');;
    }
}
