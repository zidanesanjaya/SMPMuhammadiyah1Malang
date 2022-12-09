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
        <div class="panel-heading">
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
                        <select class="form-control" name="Kecamatan" id="kecamatan" onchange="desaSelected();" required>
                        
                        </select>
                    </div>
                    <div class="col">
                        <label class="">Desa / Kelurahan <span class="text-danger"> *</span></label>
                        <select class="form-control" name="keluarahan" id="kelurahan" required>
                        
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
        <div class="panel-heading">
                    <h3 class="panel-title">Form Orang Tua / Wali</h3>
                </div>
                <div class="panel-body">
                    <div class="p-2">
                        <h6>Form Ayah</h6>
                        <div class="row">
                            <div class="col">
                                <label class="">NIK Ayah <span class="text-danger"> *</span></label>
                                <input class="form-control" name="nik_ayah" type="text" required>   
                            </div>
                            <div class="col">
                                <label class="">Nama Ayah <span class="text-danger"> *</span></label>
                                <input class="form-control" name="nama_ayah" type="text" required>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Pendidikan Ayah <span class="text-danger"> *</span></label>
                                <input class="form-control" name="pendidikan_ayah" type="text" required>   
                            </div>
                            <div class="col">
                                <label class="">Pekerjaan Ayah <span class="text-danger"> *</span></label>
                                <input class="form-control" name="pekerjaan_ayah" type="text" required>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Tempat Lahir <span class="text-danger"> *</span></label>
                                <input class="form-control" name="tempat_lahir_ayah" type="text" required>   
                            </div>
                            <div class="col">
                                <label class="">Tanggal Lahir <span class="text-danger"> *</span></label>
                                <input class="form-control" name="tanggal_lahir_ayah" type="date" required>   
                            </div>
                        </div>
                        <label class="">Penghasilan <span class="text-danger"> *</span></label>
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

                    <div class="bg-muted-m p-2 mt-5">
                        <h6>Form Ibu</h6>
                        <div class="row">
                            <div class="col">
                                <label class="">NIK Ibu <span class="text-danger"> *</span></label>
                                <input class="form-control" name="nik_ibu" type="text" required>   
                            </div>
                            <div class="col">
                                <label class="">Nama Ibu <span class="text-danger"> *</span></label>
                                <input class="form-control" name="nama_ibu" type="text" required>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Pendidikan Ibu <span class="text-danger"> *</span></label>
                                <input class="form-control" name="pendidikan_ibu" type="text" required>   
                            </div>
                            <div class="col">
                                <label class="">Pekerjaan Ibu <span class="text-danger"> *</span></label>
                                <input class="form-control" name="pekerjaan_ibu" type="text" required>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="">Tempat Lahir <span class="text-danger"> *</span></label>
                                <input class="form-control" name="tempat_lahir_ibu" type="text" required>   
                            </div>
                            <div class="col">
                                <label class="">Tanggal Lahir <span class="text-danger"> *</span></label>
                                <input class="form-control" name="tanggal_lahir_ibu" type="date" required>   
                            </div>
                        </div>
                        <label class="">Penghasilan <span class="text-danger"> *</span></label>
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
                    
                    <div class="mt-5 p-2">
                    <h6>Form Wali</h6>
                    <div class="row">
                    <div class="col">
                        <label class="">NIK Wali</label>
                        <input class="form-control" name="nik_wali" type="text">   
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
                    <select class="form-control" name="penghasilan_wali>
                        <option value="100.000 - 500.000">100.000 - 500.000</option>
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