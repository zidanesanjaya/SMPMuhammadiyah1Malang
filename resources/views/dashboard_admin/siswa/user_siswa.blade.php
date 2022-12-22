@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Siswa</h4>
        </div>
    </div>
    <div class="col-sm-6 text-right">
        <div class="page-title-box">
            <a class="btn btn-success btn-raised" href="{{ route('export-users') }}"><i class="mdi mdi-file-excel"></i> Export Siswa</a>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>List Siswa Terdaftar</h5>
        </div>
        <div class="col text-right">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group mb-4">
                        <div class="custom-file text-left">
                            <input type="file" name="file" class="form-control">
                        </div>
                    </div>
                    <a class="btn btn-warning btn-raised" href="/admin/excel/template-import-siswa.xlsx"><i class="mdi mdi-arrow-down-bold-circle"></i> Template</a>
                    <button class="btn btn-primary">Import Siswa</button>
            </form>
        </div>
    </div>
    <hr>

    @if(session()->has('gelombang'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil Update!</strong> {{ session()->get('gelombang') }}
    </div>
    @elseif(session()->has('reset'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil Update!</strong> {{ session()->get('reset') }}
    </div>
    @elseif(session()->has('hapus'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil Hapus!</strong> {{ session()->get('hapus') }}
    </div>
    @endif
    <div class="row form-material">
        <div class="col-md-12">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Gelombang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                @foreach($listUser as $listUser)
                    <tr>
                        <td>{{ $listUser->email }}</td>
                        <td>{{ $listUser->nama_lengkap }}</td>
                        <td>{{ $listUser->nama_gelombang == null ? 'Belum Terdaftar' : $listUser->nama_gelombang}}</td>
                        <td>
                            <a  title="Lihat Detail" class="btn btn-success btn-raised" href="#"  onclick="myFunction({{$listUser->id}});" ><i class="mdi mdi-eye"></i></a>   
                            <a title="Edit Gelombang" class="btn btn-warning btn-raised" href="#" onclick="gelombang({{$listUser->id}});"><i class="mdi mdi-pencil-box"></i></a>         
                            <a title="Hapus User" class="btn btn-danger btn-raised ml-3" href="#" onclick="hapus({{$listUser->id}});"><i class="mdi mdi-delete"></i></a> 
                            <a  title="Reset Password" class="btn btn-primary btn-raised" href="#" onclick="resetPW({{$listUser->id}});"><i class="mdi mdi-account-convert"></i></a>         
                        </td>
                    </tr>
                    <?php
                        $no++;
                    ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        <h6 id="msg-siswa" class="text-white p-2 bg-success mb-3" ></h6>
            <div id="content_siswa" style="display:none ">
                <h3>Detail Siswa</h3>
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
                            <td colspan="2"><b>Nama Lengkap : </b></td>
                            <td colspan="2" id="nama_lengkap"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Nama Panggilan : </b></td>
                            <td colspan="2" id="nama_panggilan"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Nomor Telepon : </b></td>
                            <td colspan="2" id="nomor_telp_siswa"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tempat Lahir : </b></td>
                            <td colspan="2" id="tempat_lahir_siswa"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tanggal Lahir : </b></td>
                            <td colspan="2" id="tanggal_lahir_siswa"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Jenis Kelamin : </b></td>
                            <td colspan="2" id="jenis_kelamin"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Agama : </b></td>
                            <td colspan="2" id="agama"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tinggal Dengan : </b></td>
                            <td colspan="2" id="tinggal_dengan"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Gol Darah : </b></td>
                            <td colspan="2" id="gol_darah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Cita Cita : </b></td>
                            <td colspan="2" id="cita_cita"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Hobi : </b></td>
                            <td colspan="2" id="hobi"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Jumlah Saudara : </b></td>
                            <td colspan="2" id="jumlah_saudara"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Anak Ke : </b></td>
                            <td colspan="2" id="anak_ke"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Berat Badan : </b></td>
                            <td colspan="2" id="berat_badan"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Bakat : </b></td>
                            <td colspan="2" id="bakat"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Sekolah Asal : </b></td>
                            <td colspan="2" id="sekolah_asal"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h6 id="msg-detail-alamat" class="text-white p-2 bg-success mb-3 mt-5"></h6>
            <div id="content_detail_alamat" style="display:none ">
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
                            <td colspan="2" id="provinsi"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Kota : </b></td>
                            <td colspan="2" id="kota"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Kecamatan : </b></td>
                            <td colspan="2" id="kecamatan"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Kelurahan : </b></td>
                            <td colspan="2" id="kelurahan"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Nomor Telepon : </b></td>
                            <td colspan="2" id="nomor_telepon_ortu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Alamat Detail : </b></td>
                            <td colspan="2" id="alamat_detail_ortu"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <h6 id="msg-ayah" class="text-white p-2 bg-success mb-3 mt-5" ></h6>
            <div id="content_ayah" style="display:none ">
                <h3>Detail Orang Tua (Ayah)</h3>
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
                            <td colspan="2" id="nik_ayah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Nama Ayah : </b></td>
                            <td colspan="2" id="nama_ayah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pendidikan Ayah : </b></td>
                            <td colspan="2" id="pendidikan_ayah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pekerjaan Ayah : </b></td>
                            <td colspan="2" id="pekerjaan_ayah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tempat Lahir Ayah : </b></td>
                            <td colspan="2" id="tempat_lahir_ayah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tanggal Lahir Ayah : </b></td>
                            <td colspan="2" id="tanggal_lahir_ayah"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Penghasilan Ayah : </b></td>
                            <td colspan="2" id="penghasilan_ayah"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h6 id="msg-ibu" class="text-white p-2 bg-success mb-3 mt-5" ></h6>
            <div id="content_ibu" style="display:none ">
                <h3>Detail Orang Tua (Ibu)</h3>
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
                            <td colspan="2" id="nik_ibu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Nama Ibu : </b></td>
                            <td colspan="2" id="nama_ibu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pendidikan Ibu : </b></td>
                            <td colspan="2" id="pendidikan_ibu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pekerjaan Ibu : </b></td>
                            <td colspan="2" id="pekerjaan_ibu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tempat Lahir Ibu : </b></td>
                            <td colspan="2" id="tempat_lahir_ibu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tanggal Lahir Ibu : </b></td>
                            <td colspan="2" id="tanggal_lahir_ibu"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Penghasilan Ibu : </b></td>
                            <td colspan="2" id="penghasilan_ibu"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h6 id="msg-wali" class="text-white p-2 bg-success mb-3 mt-5" ></h6>
            <div id="content_wali" style="display:none ">
                <h3>Detail Wali</h3>
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
                            <td colspan="2" id="nik_wali"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Nama Wali : </b></td>
                            <td colspan="2" id="nama_wali"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pendidikan Wali : </b></td>
                            <td colspan="2" id="pendidikan_wali"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Pekerjaan Wali : </b></td>
                            <td colspan="2" id="pekerjaan_wali"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tempat Lahir Wali : </b></td>
                            <td colspan="2" id="tempat_lahir_wali"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Tanggal Lahir Wali : </b></td>
                            <td colspan="2" id="tanggal_lahir_wali"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><b>Penghasilan Wali : </b></td>
                            <td colspan="2" id="penghasilan_wali"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" aria-label="Close" class="btn btn-primary" >Close</button>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Gelombang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_gelombang" method="post" >
        @csrf
        @method('put')
        <div class="modal-body">
            <h6 class="text-muted">Gelombang</h6>
            <select class="form-control" name="gelombang" id="gelombang">
               
            </select>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="resetPW" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_reset_pw" method="post" >
        @csrf
        @method('put')
        <div class="modal-body">
            <p>Apakah Anda Ingin Reset Password Pemilik Email <b id="nama_reset"></b> Ini ?</>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" aria-label="Close" class="btn btn-primary">Tidak</button>
            <button class="btn btn-danger btn-raised" type="submit">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form_hapus" method="post" >
        @csrf
        {{ method_field('delete')}}
        <div class="modal-body">
            <p>Apakah Anda Ingin Menghapus Pemilik Email <b id="hapus_email"></b> Ini ?</>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" aria-label="Close" class="btn btn-primary">Tidak</button>
            <button class="btn btn-danger btn-raised" type="submit">Iya</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
   function myFunction(val){
        detail(val);
        $('#detail').modal('show');
   }
   function resetPW(val){
        $('#resetPW').modal('show');

        $.ajax({
        type  : 'GET',
        url   : "{{route('detail_siswa_by_id', '')}}"+"/"+val,
        async : false,
        dataType : 'json',
            success : function(data){
                $("#nama_reset").html(data.email);
            }
        });
        $('#form_reset_pw').attr('action', "{{route('update.reset_password', '')}}"+"/"+val);
   }

   function hapus(val){
        $('#hapus').modal('show');
        $.ajax({
        type  : 'GET',
        url   : "{{route('detail_siswa_by_id', '')}}"+"/"+val,
        async : false,
        dataType : 'json',
            success : function(data){
                $("#hapus_email").html(data.email);
            }
        });
        $('#form_hapus').attr('action', "{{route('user.destroy_siswa', '')}}"+"/"+val);
   }

   function gelombang(val){
        $('#edit').modal('show');
        tampil_gelombang();
        $('#form_gelombang').attr('action', "{{route('update.gelombang_siswa', '')}}"+"/"+val);
   }

   
   function detail(val){
        var url_ = "{{route('detail_siswa_by_id', '')}}"+"/"+val;
        $.ajax({
        type  : 'GET',
        url   : url_,
        async : false,
        dataType : 'json',
            success : function(data){
                if(data.nama_panggilan != null){
                    $('#content_siswa').css("display", "block");
                    $('#msg-siswa').removeClass('bg-danger').addClass('bg-success').html('User Ini Sudah Menginputkan Data Detail Siswa !');

                    $("#nama_panggilan").html(data.nama_panggilan);
                    $("#nama_lengkap").html(data.nama_lengkap);
                    $("#nomor_telp_siswa").html(data.telepon);
                    $("#tempat_lahir_siswa").html(data.tempat_lahir_siswa);
                    $("#tanggal_lahir_siswa").html(data.tanggal_lahir_siswa);
                    $("#jenis_kelamin").html(data.jenis_kelamin);
                    $("#agama").html(data.agama);
                    $("#tinggal_dengan").html(data.tinggal_dengan);
                    $("#gol_darah").html(data.gol_darah);
                    $("#cita_cita").html(data.cita_cita);
                    $("#hobi").html(data.hobi);
                    $("#jumlah_saudara").html(data.jumlah_saudara);
                    $("#anak_ke").html(data.anak_ke);
                    $("#berat_badan").html(data.berat_badan + " Kg");
                    $("#bakat").html(data.bakat);
                    $("#sekolah_asal").html(data.sekolah_asal);


                }else{
                    $('#msg-siswa').removeClass('bg-success').addClass('bg-danger').html('User Ini Tidak Menginputkan Data Siswa !');
                    $('#content_siswa').css("display", "none");
                }

                if(data.provinsi != null && data.kabupaten!=null){
                    $('#content_detail_alamat').css("display", "block");
                    $('#msg-detail-alamat').removeClass('bg-danger').addClass('bg-success').html('User Ini Sudah Menginputkan Data Detail Alamat !')

                    $("#provinsi").html(data.provinsi);
                    $("#kota").html(data.kabupaten);
                    $("#kecamatan").html(data.kecamatan);
                    $("#kelurahan").html(data.kelurahan);
                    $("#alamat_detail_ortu").html(data.alamat);
                    $("#nomor_telepon_ortu").html(data.telepon_orang_tua);
                }else{
                    $('#msg-detail-alamat').removeClass('bg-success').addClass('bg-danger').html('User Ini Tidak Menginputkan Data Detail Alamat !');
                    $('#content_detail_alamat').css("display", "none");
                }

                if(data.nik_ayah != null && data.nama_ayah !=null){
                    $('#content_ayah').css("display", "block");
                    $('#msg-ayah').removeClass('bg-danger').addClass('bg-success').html('User Ini Sudah Menginputkan Data Ayah !');

                    $("#nik_ayah").html(data.nik_ayah);
                    $("#nama_ayah").html(data.nama_ayah);
                    $("#pekerjaan_ayah").html(data.pekerjaan_ayah);
                    $("#penghasilan_ayah").html(data.penghasilan_ayah);
                    $("#tanggal_lahir_ayah").html(data.tanggal_lahir_ayah);
                    $("#pendidikan_ayah").html(data.pendidikan_ayah);
                    $("#tempat_lahir_ayah").html(data.tempat_lahir_ayah);

                }else{
                    $('#msg-ayah').removeClass('bg-success').addClass('bg-danger').html('User Ini Tidak Menginputkan Data Ayah !')
                    $('#content_ayah').css("display", "none");
                }

                if(data.nik_ibu != null && data.nama_ibu !=null){
                    $('#content_ibu').css("display", "block");
                    $('#msg-ibu').removeClass('bg-danger').addClass('bg-success').html('User Ini Sudah Menginputkan Data Ibu !')

                    $("#nik_ibu").html(data.nik_ibu);
                    $("#nama_ibu").html(data.nama_ibu);
                    $("#pekerjaan_ibu").html(data.pekerjaan_ibu);
                    $("#penghasilan_ibu").html(data.penghasilan_ibu);
                    $("#tanggal_lahir_ibu").html(data.tanggal_lahir_ibu);
                    $("#pendidikan_ibu").html(data.pendidikan_ibu);
                    $("#tempat_lahir_ibu").html(data.tempat_lahir_ibu);
                }else{
                    $('#content_ibu').css("display", "none");
                    $('#msg-ibu').removeClass('bg-success').addClass('bg-danger').html('User Ini Tidak Menginputkan Data Ibu !')
                }

                if(data.nik_wali != null && data.nama_wali !=null){
                    $('#content_wali').css("display", "block");
                    $('#msg-wali').removeClass('bg-danger').addClass('bg-success').html('User Ini Sudah Menginputkan Data Wali !')

                    $("#nik_wali").html(data.nik_wali);
                    $("#nama_wali").html(data.nama_wali);
                    $("#pekerjaan_wali").html(data.pekerjaan_wali);
                    $("#penghasilan_wali").html(data.penghasilan_wali);
                    $("#tanggal_lahir_wali").html(data.tanggal_lahir_wali);
                    $("#pendidikan_wali").html(data.pendidikan_wali);
                    $("#tempat_lahir_wali").html(data.tempat_lahir_wali);
                }else{
                    $('#content_wali').css("display", "none");
                    $('#msg-wali').removeClass('bg-success').addClass('bg-warning').html('User Ini Tidak Menginputkan Data Wali !')
                }
            }
        });  
    }  

    function tampil_gelombang() {
        $.ajax({
        type  : 'GET',
        url   : '{{ route('json_gelombang') }}',
        async : false,
        dataType : 'json',
        success : function(data){
            var html = '';
            var i;
            for(i=0; i<data.length; i++){
                html += '<option value="'+data[i].id+'">'+data[i].nama_gelombang+'</option>';
            }
            $('#gelombang').html(html);
        }
        });
    }
</script>


@endsection