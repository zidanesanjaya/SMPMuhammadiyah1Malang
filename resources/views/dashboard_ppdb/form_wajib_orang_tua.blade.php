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
    @if($detail_ortu == null && $ibu == null && $ayah == null)
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step col-xs-3"> 
                <a href="#step-1" type="button" class="btn btn-success btn-raised btn-circle">1</a>
                <p><small>Alamat Orang Tua</small></p>
            </div>
            <div class="stepwizard-step col-xs-4"> 
                <a href="#step-2" type="button" class="btn btn-default btn-raised btn-circle" disabled="disabled" disabled>2</a>
                <p><small>Detail Orang Tua / Wali</small></p>
            </div>
           
        </div>
    </div>
    
    <form action="{{route('insert.detail_orang_tua')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading mt-5 mb-5">
                 <h3 class="panel-title">Form Wajib (Orang Tua / Wali)</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col">
                        <label class="">Provinsi <span class="text-danger"> *</span></label>
                        <select class="form-control select2" name="provinsi" id="provinsi" onchange="kotaSelected();" required>
                        
                        </select>
                    </div>
                    <div class="col">
                        <label class="">kota / Kabupaten <span class="text-danger"> *</span></label>
                        <select class="form-control" name="kota" id="kota" onchange="kecamatanSelected();" required>
                        
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="">Kecamatan <span class="text-danger"> *</span></label>
                        <select class="form-control" name="kecamatan" id="kecamatan" onchange="desaSelected();" required>
                        
                        </select>
                    </div>
                    <div class="col">
                        <label class="">Desa / Kelurahan <span class="text-danger"> *</span></label>
                        <select class="form-control" name="kelurahan" id="kelurahan" required>
                        
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label class="">Telepon <span class="text-danger"> *</span></label>
                        <input class="form-control" name="telepon_orang_tua" type="number" required>   
                    </div>
                    <div class="col">
                        <label class="">Alamat <span class="text-danger"> *</span></label>
                        <textarea class="form-control" name="alamat_orang_tua" required></textarea>
                    </div>
                </div>
                <button class="btn btn-primary nextBtn pull-right btn-block mt-3" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
        <div class="panel-heading mt-5 mb-5">
                    <h3 class="panel-title">Form Orang Tua / Wali</h3>
                </div>
                <div class="panel-body">
                    <div class="p-2">
                        <h6>Form Ayah</h6>
                        <div class="row">
                            <div class="col">
                                <label class="">NIK Ayah </label>
                                <input class="form-control" name="nik_ayah" type="number">   
                            </div>
                            <div class="col">
                                <label class="">Nama Ayah</label>
                                <input class="form-control" name="nama_ayah" type="text">   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Pendidikan Ayah</label>
                                <input class="form-control" name="pendidikan_ayah" type="text">   
                            </div>
                            <div class="col">
                                <label class="">Pekerjaan Ayah</label>
                                <input class="form-control" name="pekerjaan_ayah" type="text">   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Tempat Lahir Ayah</label>
                                <input class="form-control" name="tempat_lahir_ayah" type="text">   
                            </div>
                            <div class="col">
                                <label class="">Tanggal Lahir Ayah</label>
                                <input class="form-control" name="tanggal_lahir_ayah" type="date">   
                            </div>
                        </div>
                        <label class="">Penghasilan Ayah</label>
                        <select class="form-control" name="penghasilan_ayah">
                            <option value="100.000 - 500.000">100.000 - 500.000</option>
                            <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                            <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                            <option value="1.500.000 - 2.500.000">1.500.000 - 2.500.000</option>
                            <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                            <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                            <option value="Lebih Dari 10.000.000">Lebih Dari 10.000.000</option>
                        </select>
                    </div>

                    <div class="bg-muted-m p-2 mt-5">
                        <h6>Form Wali</h6>
                        <div class="row">
                            <div class="col">
                                <label class="">NIK Ibu</label>
                                <input class="form-control" name="nik_ibu" type="number">   
                            </div>
                            <div class="col">
                                <label class="">Nama Ibu </label>
                                <input class="form-control" name="nama_ibu" type="text">   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Pendidikan Ibu </label>
                                <input class="form-control" name="pendidikan_ibu" type="text">   
                            </div>
                            <div class="col">
                                <label class="">Pekerjaan Ibu </label>
                                <input class="form-control" name="pekerjaan_ibu" type="text">   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Tempat Lahir </label>
                                <input class="form-control" name="tempat_lahir_ibu" type="text">   
                            </div>
                            <div class="col">
                                <label class="">Tanggal Lahir </label>
                                <input class="form-control" name="tanggal_lahir_ibu" type="date">   
                            </div>
                        </div>
                        <label class="">Penghasilan </label>
                        <select class="form-control" name="penghasilan_ibu">
                            <option value="100.000 - 500.000">100.000 - 500.000</option>
                            <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                            <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                            <option value="1.500.000 - 2.500.000">1.500.000 - 2.500.000</option>
                            <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                            <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                            <option value="Lebih Dari 10.000.000">Lebih Dari 10.000.000</option>
                        </select>
                    </div>
                    
                    <div class="mt-5 p-2">
                    <h6>Form Wali</h6>
                    <div class="row">
                    <div class="col">
                        <label class="">NIK Wali</label>
                        <input class="form-control" name="nik_wali" type="number">   
                    </div>
                    <div class="col">
                        <label class="">Nama Wali</label>
                        <input class="form-control" name="nama_wali" type="text">   
                    </div>
                </div>
                    <div class="row">
                        <div class="col">
                            <label class="">Pendidikan Wali</label>
                            <input class="form-control" name="pendidikan_wali" type="text">   
                        </div>
                        <div class="col">
                            <label class="">Pekerjaan Wali</label>
                            <input class="form-control" name="pekerjaan_wali" type="text">   
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="">Tempat Lahir</label>
                            <input class="form-control" name="tempat_lahir_wali" type="text">   
                        </div>
                        <div class="col">
                            <label class="">Tanggal Lahir</label>
                            <input class="form-control" name="tanggal_lahir_wali" type="date">   
                        </div>
                    </div>
                    <label class="">Penghasilan</label>
                    <select class="form-control" name="penghasilan_wali">
                        <option value="100.000 - 500.000" >100.000 - 500.000</option>
                        <option value="500.000 - 1.000.000">500.000 - 1.000.000</option>
                        <option value="1.000.000 - 1.500.000">1.000.000 - 1.500.000</option>
                        <option value="1.500.000 - 2.500.000">1.500.000 - 2.500.000</option>
                        <option value="2.500.000 - 5.000.000">2.500.000 - 5.000.000</option>
                        <option value="5.000.000 - 10.000.000">5.000.000 - 10.000.000</option>
                        <option value="Lebih Dari 10.000.000">Lebih Dari 10.000.000</option>
                    </select>
                </div>
                <button class="btn btn-success pull-right btn-block btn-raised mt-4" type="submit">Simpan</button>
            </div>
        </div>
        </div>
    </form>

    @else
    <h6 class="text-white p-2 bg-success mb-3">Anda Sudah Mengisi Biodata Orang Tua !</h6>
    <h3>Detail Alamat</h3>
    <hr>
        <table class="table table-bordered mb-0 mt-2">
            <thead>
                <tr>
                    <th colspan="2">Attr</th>
                    <th colspan="2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><b>Provinsi : </b></td>
                    <td colspan="2">{{$detail_ortu->provinsi}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Kota : </b></td>
                    <td colspan="2">{{$detail_ortu->kabupaten}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Kecamatan : </b></td>
                    <td colspan="2">{{$detail_ortu->kecamatan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Kelurahan : </b></td>
                    <td colspan="2">{{$detail_ortu->kelurahan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Nomor Telepon : </b></td>
                    <td colspan="2">{{$detail_ortu->telepon_orang_tua}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Alamat Detail : </b></td>
                    <td colspan="2">{{$detail_ortu->alamat}}</td>
                </tr>
            </tbody>
        </table>

        @if($ayah != null)
        <h3 class="mt-5">Detail Orang Tua (Ayah)</h3>
        <hr>
        <table class="table table-bordered mb-0 mt-2">
            <thead>
                <tr>
                    <th colspan="2">Attr</th>
                    <th colspan="2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><b>NIK Ayah : </b></td>
                    <td colspan="2">{{$ayah->nik}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Nama Ayah : </b></td>
                    <td colspan="2">{{$ayah->nama}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Pendidikan Ayah : </b></td>
                    <td colspan="2">{{$ayah->pendidikan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Pekerjaan Ayah : </b></td>
                    <td colspan="2">{{$ayah->pekerjaan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Tempat Lahir Ayah : </b></td>
                    <td colspan="2">{{$ayah->tempat_lahir}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Tanggal Lahir Ayah : </b></td>
                    <td colspan="2">{{$ayah->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Penghasilan Ayah : </b></td>
                    <td colspan="2">{{$ayah->penghasilan}}</td>
                </tr>
            </tbody>
        </table>
        @endif

        @if($ibu!=null)
        <h3 class="mt-5">Detail Orang Tua (Ibu)</h3>
        <hr>
        <table class="table table-bordered mb-0 mt-2">
            <thead>
                <tr>
                    <th colspan="2">Attr</th>
                    <th colspan="2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><b>NIK Ibu : </b></td>
                    <td colspan="2">{{$ibu->nik}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Nama Ibu : </b></td>
                    <td colspan="2">{{$ibu->nama}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Pendidikan Ibu : </b></td>
                    <td colspan="2">{{$ibu->pendidikan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Pekerjaan Ibu : </b></td>
                    <td colspan="2">{{$ibu->pekerjaan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Tempat Lahir Ibu : </b></td>
                    <td colspan="2">{{$ibu->tempat_lahir}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Tanggal Lahir Ibu : </b></td>
                    <td colspan="2">{{$ibu->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Penghasilan Ibu : </b></td>
                    <td colspan="2">{{$ibu->penghasilan}}</td>
                </tr>
            </tbody>
        </table>
        @endif

        @if($wali != null)
        <h3 class="mt-5">Detail Wali</h3>
        <hr>
        <table class="table table-bordered mb-0 mt-2">
            <thead>
                <tr>
                    <th colspan="2">Attr</th>
                    <th colspan="2">Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="2"><b>NIK Wali : </b></td>
                    <td colspan="2">{{$wali->nik}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Nama Wali : </b></td>
                    <td colspan="2">{{$wali->nama}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Pendidikan Wali : </b></td>
                    <td colspan="2">{{$wali->pendidikan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Pekerjaan Wali : </b></td>
                    <td colspan="2">{{$wali->pekerjaan}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Tempat Lahir Wali : </b></td>
                    <td colspan="2">{{$wali->tempat_lahir}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Tanggal Lahir Wali : </b></td>
                    <td colspan="2">{{$wali->tanggal_lahir}}</td>
                </tr>
                <tr>
                    <td colspan="2"><b>Penghasilan Wali : </b></td>
                    <td colspan="2">{{$wali->penghasilan}}</td>
                </tr>
            </tbody>
        </table>
        @endif
    @endif
</div>

<script>
    $(document).ready(function () {

        tampil_provinsi();

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-success').addClass('btn-default');
                $item.addClass('btn-success');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".msg").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".msg").addClass("has-error");
                }
            }

            if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-success').trigger('click');
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