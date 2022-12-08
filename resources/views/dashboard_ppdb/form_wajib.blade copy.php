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
                <input type="text" class="form-control pl-2" value="{{Auth::user()->nama_lengkap}}" disabled>

                <h6 class="text-muted mt-4">Nama Panggilan <span class="text-danger"> *</span></h6>
                <input class="form-control" type="text" name="nama_panggilan" required>
                
                <h6 class="text-muted mt-4">Tempat / Tanggal Lahir <span class="text-danger"> *</span></h6>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="tempat_lahir_siswa" required> 
                    </div>
                    /
                    <div class="col">
                        <input type="date" class="form-control" name="tanggal_lahir_siswa">
                    </div>
                </div>

                <h6 class="text-muted mt-4">Jenis Kelamin / Agama <span class="text-danger"> *</span></h6>
                <div class="row">
                    <div class="col">
                        <label class="radio-inline mr-2">
                            <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki-Laki"> Laki-Laki
                        </label>
                        <label class="radio-inline mr-2">
                            <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan"> Perempuan
                        </label>
                    </div>
                    /
                    <div class="col">
                        <select class="form-control" name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </div>
                </div>

                <h6 class="text-muted mt-4">Cita-Cita / Hobi <span class="text-danger"> *</span></h6>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="cita_cita" required > 
                    </div>
                    /
                    <div class="col">
                        <input type="text" class="form-control" id="mdate" name="hobi" required>
                    </div>
                </div>

                <h6 class="text-muted mt-4">Alamat <span class="text-danger"> *</span></h6>
                <textarea class="form-control pl-2" name="alamat"></textarea>
                <div class="row bg-white">         
                    <div class="col">
                        <h6 class="text-muted mt-4">Tinggal Dengan <span class="text-danger"> *</span></h6>
                        <select class="form-control" name="tinggal_dengan" required>
                            <option value="Orang Tua">Orang Tua</option>
                            <option value="Wali">Wali</option>
                        </select>
                        <h6 class="text-muted mt-4">Gol Darah</h6>
                        <input class="form-control" type="text" name="gol_darah">

                        <h6 class="text-muted mt-4">Jumlah Saudara <span class="text-danger"> *</span></h6>
                        <input class="form-control" type="number" name="jumlah_saudara" required>

                        <h6 class="text-muted mt-4">Anak Ke- <span class="text-danger"> *</span></h6>
                        <input class="form-control" type="number" name="anak_ke" required>
                    </div>
                    <div class="col">
                        <h6 class="text-muted mt-4">Berat Badan</h6>
                        <input class="form-control" type="text" name="berat_badan">

                        <h6 class="text-muted mt-4">Telepon <span class="text-danger"> *</span></h6>
                        <input class="form-control" type="text" name="telepon" required>

                        <h6 class="text-muted mt-4">Bakat</h6>
                        <input class="form-control" type="text" name="bakat">

                        <h6 class="text-muted mt-4">Sekolah Asal <span class="text-danger"> *</span></h6>
                        <input class="form-control" type="text" name="sekolah_asal" required>
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
                    <h6 class="text-muted">Provinsi <span class="text-danger"> *</span></h6>
                    <select class="form-control select2" name="provinsi" id="provinsi" onchange="kotaSelected();" required>
                    
                    </select>
                </div>
                <div class="col">
                    <h6 class="text-muted">kota / Kabupaten <span class="text-danger"> *</span></h6>
                    <select class="form-control" name="kota" id="kota" onchange="kecamatanSelected();" required>
                       
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Kecamatan <span class="text-danger"> *</span></h6>
                    <select class="form-control" name="Kecamatan" id="kecamatan" onchange="desaSelected();" required>
                       
                    </select>
                </div>
                <div class="col">
                    <h6 class="text-muted">Desa / Kelurahan <span class="text-danger"> *</span></h6>
                    <select class="form-control" name="keluarahan" id="kelurahan" required>
                       
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Telepon <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="telepon_orang_tua" type="number" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Alamat <span class="text-danger"> *</span></h6>
                    <textarea class="form-control" name="alamat_orang_tua" required></textarea>
                </div>
            </div>
        </div>
    </div>
<br><br>
        <h5>Form Ayah (Orang Tua)</h5>
        <hr>

        <div class="row form-material">
            <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">NIK Ayah <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="nik_ayah" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Nama Ayah <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="nama_ayah" type="text" required>   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Pendidikan Ayah <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="pendidikan_ayah" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Pekerjaan Ayah <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="pekerjaan_ayah" type="text" required>   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Tempat Lahir <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="tempat_lahir_ayah" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Tanggal Lahir <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="tanggal_lahir_ayah" type="date" required>   
                </div>
            </div>
                <h6 class="text-muted">Penghasilan <span class="text-danger"> *</span></h6>
                <select class="form-control" name="penghasilan_ayah" required>
                    <option value="100.000 - 500.000">100.000 - 500.000</option>
                    <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                    <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                    <option value="1.500.000 - 2.500.000">1.500.000 - 2.500.000</option>
                    <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                    <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                    <option value="Lebih Dari 10.000.000">Lebih Dari 10.000.000</option>
                </select>
        </div>

    <div class="container bg-white p-3 mt-5">
        <h5>Form Ibu (Orang Tua)</h5>
        <hr>

        <div class="row form-material">
            <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">NIK Ibu <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="nik_ibu" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Nama Ibu <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="nama_ibu" type="text" required>   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Pendidikan Ibu <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="pendidikan_ibu" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Pekerjaan Ibu <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="pekerjaan_ibu" type="text" required>   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Tempat Lahir <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="tempat_lahir_ibu" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Tanggal Lahir <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="tanggal_lahir_ibu" type="date" required>   
                </div>
            </div>
                <h6 class="text-muted">Penghasilan <span class="text-danger"> *</span></h6>
                <select class="form-control" name="penghasilan_ibu" required>
                    <option value="100.000 - 500.000">100.000 - 500.000</option>
                    <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                    <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                    <option value="1.500.000 - 2.500.000">1.500.000 - 2.500.000</option>
                    <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                    <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                    <option value="Lebih Dari 10.000.000">Lebih Dari 10.000.000</option>
                </select>
        </div>
    </div>

    <br><br>
        <h5>Form Wali (wali)</h5>
        <hr>

        <div class="row form-material">
            <div class="col-md-12">
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">NIK Wali <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="nik_wali" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Nama Wali <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="nama_wali" type="text" required>   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Pendidikan Wali <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="pendidikan_wali" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Pekerjaan Wali <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="pekerjaan_wali" type="text" required>   
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Tempat Lahir <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="tempat_lahir_wali" type="text" required>   
                </div>
                <div class="col">
                    <h6 class="text-muted">Tanggal Lahir <span class="text-danger"> *</span></h6>
                    <input class="form-control" name="tanggal_lahir_wali" type="date" required>   
                </div>
            </div>
                <h6 class="text-muted">Penghasilan <span class="text-danger"> *</span></h6>
                <select class="form-control" name="penghasilan_wali" required>
                    <option value="100.000 - 500.000">100.000 - 500.000</option>
                    <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                    <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                    <option value="1.500.000 - 2.500.000">1.500.000 - 2.500.000</option>
                    <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                    <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                    <option value="Lebih Dari 10.000.000">Lebih Dari 10.000.000</option>
                </select>
        </div>

    <button type="submit" class="btn btn-success btn-raised btn-block mt-5">Simpan</button>
</form>
<br>

<script>
    $(document).ready(function() {
        tampil_provinsi();
    });  
    function kotaSelected(){
        let type = $('#provinsi').children(":selected").data('type');

        if(type != '-'){
            $.ajax({
            type  : 'GET',
            url   : 'https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi='+type,
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                html += '<option data-type="-">- Silahkan Pilih Kota / Kabupaten -</option>';
                for(i=0; i<data.kota_kabupaten.length; i++){
                    html += '<option value="'+data.kota_kabupaten[i].nama+'" data-type="'+data.kota_kabupaten[i].id+'">'+data.kota_kabupaten[i].nama+'</option>';
                }
                $('#kota').html(html);
            }
            });    
            $("#kecamatan").find("option").remove().end();
            $("#kelurahan").find("option").remove().end();
        }else{
            $("#kelurahan").find("option").remove().end();
            $("#kota").find("option").remove().end();
            $("#kecamatan").find("option").remove().end();
        }   
    }
    function kecamatanSelected(){
        let type = $('#kota').children(":selected").data('type');
       
        if(type != '-'){
            $.ajax({
            type  : 'GET',
            url   : 'https://dev.farizdotid.com/api/daerahindonesia/kecamatan?id_kota='+type,
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                html += '<option data-type="-">- Silahkan Pilih Kecamatan -</option>';
                for(i=0; i<data.kecamatan.length; i++){
                    html += '<option value="'+data.kecamatan[i].nama+'" data-type="'+data.kecamatan[i].id+'">'+data.kecamatan[i].nama+'</option>';
                }
                $('#kecamatan').html(html);
            }
        });
        $("#kelurahan").find("option").remove().end(); 
        }else{
            $("#kelurahan").find("option").remove().end();
            $("#kecamatan").find("option").remove().end();
        }   
    }
    function desaSelected(){
        let type = $('#kecamatan').children(":selected").data('type');

        if(type != '-'){
            $.ajax({
            type  : 'GET',
            url   : 'https://dev.farizdotid.com/api/daerahindonesia/kelurahan?id_kecamatan='+type,
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                html += '<option data-type="-">- Silahkan Pilih Keluarahan / Desa -</option>';
                for(i=0; i<data.kelurahan.length; i++){
                    html += '<option value="'+data.kelurahan[i].nama+'" data-type="'+data.kelurahan[i].id+'">'+data.kelurahan[i].nama+'</option>';
                }
                $('#kelurahan').html(html);
            }
        }); 
        }else{
            $("#kelurahan").find("option").remove().end();
        }   
    }
    function tampil_provinsi() {
            $.ajax({
            type  : 'GET',
            url   : 'https://dev.farizdotid.com/api/daerahindonesia/provinsi',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                html += '<option data-type="-">- Silahkan Pilih Provinsi -</option>';
                for(i=0; i<data.provinsi.length; i++){
                    html += '<option value="'+data.provinsi[i].nama+'" data-type="'+data.provinsi[i].id+'">'+data.provinsi[i].nama+'</option>';
                }
                $('#provinsi').html(html);
            }
        });

    }
</script>

@endsection