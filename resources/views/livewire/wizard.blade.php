
<div class="pt-5">
    @if(!empty($successMessage))
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    @endif
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 1 ? '' : 'active' }}" href="#step1">Detail Siswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 2 ? '' : 'active' }}" href="#step2">Detail Orang Tua</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $currentStep != 3 ? '' : 'active' }}" href="#step3">Check</a>
        </li>
    </ul>
    <div class="row pt-3">
        {{-- Step 1 --}}
        <div id="step1" class="needs-validation" style="display: {{ $currentStep != 1 ? 'none' : '' }}">
            <div class="row bg-white ml-3 p-4">
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
                        <input type="date" class="form-control" name="tanggal_lahir">
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
            <button class="btn btn-primary" wire:click="firstStepSubmit"type="button">Next</button>
        </div>

        {{-- Step 2 --}}
        <div id="step2" style="display: {{ $currentStep != 2 ? 'none' : '' }}">
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Provinsi</h6>
                    <select class="form-control select2" name="provinsi" id="provinsi" onchange="kotaSelected();">
                    
                    </select>
                </div>
                <div class="col">
                    <h6 class="text-muted">kota / Kabupaten</h6>
                    <select class="form-control" name="kota" id="kota" onchange="kecamatanSelected();">
                       
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h6 class="text-muted">Kecamatan</h6>
                    <select class="form-control" name="Kecamatan" id="kecamatan" onchange="desaSelected();">
                       
                    </select>
                </div>
                <div class="col">
                    <h6 class="text-muted">Desa / Kelurahan</h6>
                    <select class="form-control" name="keluarahan" id="kelurahan" >
                       
                    </select>
                </div>
            </div>
            <button class="btn btn-danger" type="button" wire:click="back(1)">Back</button>
            <button class="btn btn-primary" type="button" wire:click="secondStepSubmit">Next</button>
        </div>

        {{-- Step 3 --}}
        <div id="step3" style="display: {{ $currentStep != 3 ? 'none' : '' }}">
            <button class="btn btn-danger" type="button" wire:click="back(2)">Back</button>
            <button class="btn btn-success" wire:click="submitForm" type="button">Finish</button>
        </div>
    </div>
</div>

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