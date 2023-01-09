@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Pembayaran PPDB</h4>
        </div>
    </div>   
</div>
@if(session()->has('msg-red'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Gagal !</strong> {{ session()->get('msg-red') }}
    </div>
@endif
@if(session()->has('msg-green'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil !</strong> {{ session()->get('msg-green') }}
    </div>
@endif
<div class="container bg-white border p-3">
    <p>Isikan Data Sesuai Dengan Data Pembayaran Yang Valid !</p>
    <h5>Form Pembayaran</h5>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <form action="{{route('insert.pembayaran')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h6 class="text-muted mt-3">GELOMBANG PENDAFTARAN</h6>
                <input type="text" class="form-control pl-2" value="{{$listUser->nama_gelombang}}" disabled>

                <h6 class="text-muted">BIAYA</h6>
                <input class="form-control pl-2" value="Rp. {{ number_format($listUser->biaya,2,',','.')}}" disabled>
                
                <h6 class="text-muted mt-5">JUMLAH PEMBAYARAN ANDA</h6>
                <input type="number" class="form-control" placeholder="Masukan Jumlah Pembayaran" name="setoran" required> 

                <h6 class="text-muted mt-3">BUKTI PEMBAYARAN</h6>
                <div class="card-body">
                    <!-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="assets/plugins/dropify/images/test-image-1.jpg" /> -->
                    <input type="file" id="input-file-now-custom-1" class="dropify" name="bukti" required/>
                </div>
                @if($listUser->id_gelombang != null)
                    <button type="submit" class="btn btn-success btn-raised btn-block">Simpan</button>
                @else
                    <p class="text-danger">Silahkan Hubungi Admin Jika Gelombang Pendaftaran Belum Terdaftar Pada Akun</p>
                    <button class="btn btn-secondary btn-raised btn-block" disabled>Simpan</button>
                @endif
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <h5 class="header-title">Pembayaran</h5>
                    <div class="">
                        <table id="datatable2" class="table">
                            <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>Gelombang</th>
                                <th>Dibayarkan</th>
                                <th>Total Pembayaran</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>


                            <tbody>
                                @foreach($pembayaran as $value)
                                <tr>
                                    <td>{{$value->nama_lengkap}}</td>
                                    <td>{{$value->nama_gelombang}}</td>
                                    <td>{{number_format($value->setoran,2,',','.')}}</td>
                                    <td>{{number_format($value->total_pembayaran,2,',','.')}}</td>
                                    <td>{{$value->status_pembayaran}}</td>
                                    <td><button class="btn btn-success btn-raised" onClick="histori('{{$value->id_user}}')">Histori</button></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>           
                </div>
            </div>
        </div>
    </div><!--end row-->
</div>


<!-- Modal -->
<div class="modal fade" id="histori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Histori Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table id="datatable" class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $i = 1;
                    ?>
                    @foreach($historiPembayaran as $value)
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{number_format($value->pembayaran,2,',','.')}}</td>
                            <td>{{$value->tanggal_pembayaran}}</td>
                            <td>{{$value->status}}</td>
                            <td><img src="/storage/bukti/{{$value->path_foto}}" width="100px"></td>
                        </tr>
                    <?php
                        $i++;
                    ?>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal-footer">

        </div>
    </div>
  </div>
</div>

<script>
    function histori(val){
        // histori_detail(val);
        $('#histori').modal('show');
    }
</script>


@endsection