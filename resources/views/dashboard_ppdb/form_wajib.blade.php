@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Pembayaran PPDB</h4>
        </div>
    </div>   
</div>
<form action="#" method="post" enctype="multipart/form-data">
    <div class="container bg-white border p-3">
        <h5>Form Wajib (data Diri)</h5>
        <hr>

        <div class="row form-material">
            <div class="col-md-12">
            @csrf
            <h6 class="text-muted">ID Pendaftaran</h6>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->id }}" disabled>
                
                <h6 class="text-muted mt-4">Nama Lengkap</h6>
                <input type="text" class="form-control">

                <h6 class="text-muted mt-4">Nama Panggilan</h6>
                <input class="form-control" type="text" name="nama_panggilan">
                
                <h6 class="text-muted mt-4">Tempat / Tanggal Lahir</h6>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" required> 
                    </div>
                    /
                    <div class="col">
                        <input type="text" class="form-control" id="mdate">
                    </div>
                </div>

                <h6 class="text-muted mt-4">Jenis Kelamin / Agama</h6>
                <div class="row">
                    <div class="col">
                        <label class="radio-inline mr-2">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Laki-Laki
                        </label>
                        <label class="radio-inline mr-2">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Perempuan
                        </label>
                    </div>
                    /
                    <div class="col">
                        <select class="form-control" name="tinggal_dengan">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>

                <h6 class="text-muted mt-4">Cita-Cita / Hobi</h6>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="hobi" required > 
                    </div>
                    /
                    <div class="col">
                        <input type="text" class="form-control" id="mdate" name="cita_cita" required>
                    </div>
                </div>

                <h6 class="text-muted mt-4">Alamat</h6>
                <textarea class="form-control pl-2" name="alamat"></textarea>
                <div class="row bg-white">         
                    <div class="col">
                        <h6 class="text-muted mt-4">Tinggal Dengan</h6>
                        <select class="form-control" name="agama" required>
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Wali">Wali</option>
                        </select>
                        <h6 class="text-muted mt-4">Gol Darah</h6>
                        <input class="form-control" type="text" name="gol_darah">

                        <h6 class="text-muted mt-4">Jumlah Saudara</h6>
                        <input class="form-control" type="number" name="jumlah_saudara">

                        <h6 class="text-muted mt-4">Anak Ke-</h6>
                        <input class="form-control" type="number" name="anak_ke">
                    </div>
                    <div class="col">
                        <h6 class="text-muted mt-4">Berat Badan</h6>
                        <input class="form-control" type="text" name="berat_badan">

                        <h6 class="text-muted mt-4">Telepon</h6>
                        <input class="form-control" type="text" name="telepon">

                        <h6 class="text-muted mt-4">Bakat</h6>
                        <input class="form-control" type="text" name="bakat">

                        <h6 class="text-muted mt-4">Sekolah Asal</h6>
                        <input class="form-control" type="text" name="sekolah_asal">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container bg-white border p-3 mt-5">
        <h5>Form Wajib (Orang Tua / Wali)</h5>
        <hr>

        <div class="row form-material">
            <div class="col-md-12">
            @csrf
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Provinsi</h6>
                    <select class="form-control select2" name="provinsi" id="provinsi">
                    
                    </select>
                </div>
                <div class="col">
                    <h6 class="text-muted">kota / Kabupaten</h6>
                    <select class="form-control" name="kota" id="kota">
                       
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Kecamatan</h6>
                    <select class="form-control" name="Kecamatan" id="kecamatan">
                       
                    </select>
                </div>
                <div class="col">
                    <h6 class="text-muted">Desa / Kelurahan</h6>
                    <select class="form-control" name="keluarahan" id="desa">
                       
                    </select>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success btn-raised btn-block mt-5">Simpan</button>
</form>
<br>

<script>
    $(document).ready(function() {
        tampil_provinsi();
    });  
    function tampil_provinsi() {
            $.ajax({
            type  : 'GET',
            url   : 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.provinsi.length; i++){
                    html += '<option value="'+data.provinsi[i].id+'">'+data.provinsi[i].nama+'</option>';
                }
                $('#provinsi').html(html);
            }
        });

    }
</script>

@endsection