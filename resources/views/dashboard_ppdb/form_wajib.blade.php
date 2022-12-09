@extends('layout.master')

@section('content')
<style>
.stepwizard-step p {
    margin-top: 0px;
    color:#666;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}
.stepwizard-step button[disabled] {
    /*opacity: 1 !important;
    filter: alpha(opacity=100) !important;*/
}
.stepwizard .btn.disabled, .stepwizard .btn[disabled], .stepwizard fieldset[disabled] .btn {
    opacity:1 !important;
    color:#bbb;
}
.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content:" ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-index: 0;
}
.msg.has-error label{
    color: #fc030f;
}
.msg.has-error input{
    border-bottom: 1px solid #fc030f;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
}
</style>


<div class="container mt-5 p-5 bg-white">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-raised btn-circle">1</a>
                <p><small>Detail Siswa</small></p>
            </div>
        </div>
    </div>
    
    <form action="{{route('insert.detail_siswa')}}" method="post" enctype="multipart/form-data">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Form Wajib (data Diri)</h3>
            </div>
            @csrf

            <div class="panel-body">
            <label class="">ID Pendaftaran</label>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->id }}" disabled>
                
                <label class=" mt-4">Nama Lengkap</label>
                <input type="text" class="form-control pl-2" value="{{Auth::user()->nama_lengkap}}" disabled>

                <div class="msg">
                    <label class="mt-4">Nama Panggilan <span class="text-danger"> *</span></label>
                    <input class="form-control" required="required" type="text" id="nama_panggilan" name="nama_panggilan" required="required" onchange>
                </div>
                
                <div class="msg">
                    <label class="mt-4">Tempat / Tanggal Lahir <span class="text-danger"> *</span></label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="tempat_lahir_siswa" id="tempat_lahir" required="required"> 
                        </div>
                        /
                        <div class="col">
                            <input type="date" class="form-control" name="tanggal_lahir_siswa" id="tanggal_lahir" required>
                        </div>
                    </div>
                </div>

                <div class="msg">
                    <label class=" mt-4">Jenis Kelamin / Agama <span class="text-danger"> *</span></label>
                    <div class="row">
                        <div class="col">
                            <label class="radio-inline mr-2">
                                <input type="radio" name="jenis_kelamin" id="inlineRadio1" checked value="Laki-Laki"> Laki-Laki
                            </label>
                            <label class="radio-inline mr-2">
                                <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan"> Perempuan
                            </label>
                        </div>
                        /
                        <div class="col">
                            <select class="form-control" name="agama" id="agama" required>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="msg">
                    <label class=" mt-4">Cita-Cita / Hobi <span class="text-danger"> *</span></label>
                    <div class="row">
                        <div class="col">
                            <input type="text" class="form-control" name="cita_cita" id="cita_cita" required > 
                        </div>
                        /
                        <div class="col">
                            <input type="text" class="form-control" id="hobi" name="hobi" required>
                        </div>
                    </div>
                </div>

                <div class="msg">
                    <label class="mt-4">Alamat <span class="text-danger"> *</span></label>
                    <textarea class="form-control pl-2" name="alamat" id="alamat" required></textarea>
                </div>
                
                <div class="msg">
                    <div class="row bg-white">         
                        <div class="col">
                            <label class="text-muted mt-4">Tinggal Dengan <span class="text-danger"> *</span></label>
                            <select class="form-control" name="tinggal_dengan" id="tinggal_dengan">
                                <option value="Orang Tua">Orang Tua</option>
                                <option value="Wali">Wali</option>
                            </select>
                            <label class="text-muted mt-4">Gol Darah</label>
                            <input class="form-control" type="text" name="gol_darah" id="gol_darah">

                            <label class=" mt-4">Jumlah Saudara <span class="text-danger"> *</span></label>
                            <input class="form-control" type="number" name="jumlah_saudara" id="jumlah_saudara" required>

                            <label class=" mt-4">Anak Ke- <span class="text-danger"> *</span></label>
                            <input class="form-control" type="number" name="anak_ke" id="anak_ke" required>
                        </div>
                        <div class="col">
                            <label class=" mt-4">Berat Badan</label>
                            <input class="form-control" type="text" name="berat_badan" id = "berat_badan">

                            <label class=" mt-4">Telepon <span class="text-danger"> *</span></label>
                            <input class="form-control" type="text" name="telepon"id="telepon" required>

                            <label class="text-muted mt-4">Bakat</label>
                            <input class="form-control" type="text" name="bakat" id="bakat">

                            <label class=" mt-4">Sekolah Asal <span class="text-danger"> *</span></label>
                            <input class="form-control" type="text" name="sekolah_asal" id="sekolah_asal" required>
                        </div>
                    </div>
                </div>
                <button class="btn btn-success pull-right btn-block btn-raised mt-4" id="btn" type="submit">Simpan</button>
            </div>
        </div>
        
            </div>
        </div>
    </form>
</div>

<script>
    $(document).ready(function () {
        tampil_detail();
    });

    function tampil_detail() {
        $.ajax({
        type  : 'GET',
        url   : '{{route('detail_siswa_auth') }}',
        async : false,
        dataType : 'json',
        success : function(data){
            if(data != null){
                $("#nama_panggilan").val(data.nama_panggilan);
                $("#nama_panggilan").attr('disabled','disabled');

                $("#tempat_lahir").val(data.tempat_lahir);
                $("#tempat_lahir").attr('disabled','disabled');

                $("#tanggal_lahir").val(data.tanggal_lahir);
                $("#tanggal_lahir").attr('disabled','disabled');

                $("#agama").val(data.agama);
                $("#agama").attr('disabled','disabled');

                $("#cita_cita").val(data.cita_cita);
                $("#cita_cita").attr('disabled','disabled');

                $("#hobi").val(data.hobi);
                $("#hobi").attr('disabled','disabled');

                $("#alamat").val(data.alamat);
                $("#alamat").attr('disabled','disabled');

                $("#tinggal_dengan").val(data.tinggal_dengan);
                $("#tinggal_dengan").attr('disabled','disabled');

                $("#berat_badan").val(data.berat_badan);
                $("#berat_badan").attr('disabled','disabled');

                $("#gol_darah").val(data.gol_darah);
                $("#gol_darah").attr('disabled','disabled');

                $("#telepon").val(data.telepon);
                $("#telepon").attr('disabled','disabled');

                $("#jumlah_saudara").val(data.jumlah_saudara);
                $("#jumlah_saudara").attr('disabled','disabled');

                $("#bakat").val(data.bakat);
                $("#bakat").attr('disabled','disabled');

                $("#anak_ke").val(data.anak_ke);
                $("#anak_ke").attr('disabled','disabled');

                $("#sekolah_asal").val(data.sekolah_asal);
                $("#sekolah_asal").attr('disabled','disabled');

                document.getElementById("btn").remove();
            }
        }
    });

    }
</script>

@endsection