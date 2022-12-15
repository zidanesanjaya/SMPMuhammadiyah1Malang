@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">List Pembayaran</h4>
        </div>
    </div>
</div>

<div class="container bg-white border p-3">
    <div class="row p-3">
        <h4><b>List Pembayaran</b></h4>
        <table id="datatable" class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Pembayaran</th>
                    <th>Nama Lengkap</th>
                    <th>Jumlah Dibayarkan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i =1;
                ?>
                @foreach($listPembayaran as $value)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$value->tanggal_pembayaran}}</td>
                        <td>{{$value->nama_lengkap}}</td>
                        <td>Rp.{{number_format($value->pembayaran,2,',','.')}}</td>
                        <td>
                            <?php 
                                if($value->status == 'MENUNGGU'){
                            ?>
                                <div class="badge badge-warning">MENUNGGU</div>
                            <?php
                                }else if($value->status == 'TERIMA'){
                            ?>
                                <div class="badge badge-success">DITERIMA</div>
                            <?php
                                }else{
                            ?>
                                <div class="badge badge-danger">DITOLAK</div>
                            <?php
                                }
                            ?>
                        </td>
                        <td><button class="btn btn-primary btn-raised" onclick="detail({{$value->id}} , '{{$value->status}}' ,'{{$value->status_pembayaran}}');">Action</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detail Pembayaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body mt-3">
            <div id="button-action" class="bg-muted-m p-3">
                <form action="" id="btn-diterima" method="post">
                    @csrf
                    <label for="">Pilih Status</label>
                    <select name="status" class="form-control mb-3">
                        <option value="TERIMA">TERIMA</option>
                        <option value="TOLAK">TOLAK</option>
                    </select>
                    <button type="submit" class="btn btn-success btn-raised btn-block">SIMPAN</button>
                </form>
            </div>
            <hr>
            <div class="row">
                <div class="col-4">
                    <h5>STATUS </h5>
                </div>
                <div class="col">
                    <h5> : <span class="text-primary" id="statusp"></span> ( <span class="text-black" id="dibayarkan_vw"></span> )</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <h5>STATUS PEMBAYARAN </h5>
                </div>
                <div class="col">
                    <h5> : <span class="text-primary" id="status_pembayaran"></span></h5>
                </div>
            </div>
        <hr>
        <div class="row">
            <div class="col">
                <h6 class="mt-3">Nama Lengkap : <span class="text-black" id="nama_lengkap"></span></h6>
                <h6>Nama Gelombang : <span class="text-black" id="nama_gelombang"></span></h6>
            </div>
            <div class="col">
                <h6>Jumlah (Total Pembayaran) : <span class="text-black" id="total_pembayaran"></span></h6>
                <h6>Jumlah (Sudah Dibayarkan) : <span class="text-black" id="setoran"></span></h6>
            </div>
        </div>
        <hr>
            <div class="row">
                <img src="#" id="img_path" width="100%">
            </div>
        </div>
        <div class="modal-footer">

        </div>
    </div>
  </div>
</div>
<script>
    function detail(val ,status , status_pembayaran){
        $('#detail').modal('show');
        $("#statusp").html(status);
        if(status == 'MENUNGGU'){
            $("#button-action").css("display","block");
        }else{
            $("#button-action").css("display","none");
        }

        $.ajax({
        type  : 'GET',
        url   : "{{route('json_vw_histori_pembayaran', '')}}"+"/"+val,
        async : false,
        dataType : 'json',
            success : function(data){
                $("#img_path").attr('src','/storage/bukti/'+data.path_foto);
                $("#nama_lengkap").html(data.nama_lengkap);
                $("#nama_gelombang").html(data.nama_gelombang);
                $("#total_pembayaran").html(formatRupiah(data.total_pembayaran));
                $("#setoran").html(formatRupiah(data.setoran));
                $("#dibayarkan_vw").html(formatRupiah(data.pembayaran));
                $("#status_pembayaran").html(data.status_pembayaran);

                $("#btn-diterima").attr("action","{{route('update.histori_pembayaran','')}}"+"/"+val);
            }
        });
    }

    function formatRupiah(angka)
    {
        var rupiah = '';		
        var angkarev = angka.toString().split('').reverse().join('');
        for(var i = 0; i < angkarev.length; i++) if(i%3 == 0) rupiah += angkarev.substr(i,3)+'.';
        return 'Rp. '+rupiah.split('',rupiah.length-1).reverse().join('');
    }
</script>
@endsection