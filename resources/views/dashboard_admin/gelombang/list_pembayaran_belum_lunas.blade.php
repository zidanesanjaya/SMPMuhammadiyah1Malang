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
        <h4><b>List Belum Lunas</b></h4>
        <table id="datatable" class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Nama Gelombang</th>
                    <th>Jumlah Dibayarkan</th>
                    <th>Total Pembayaran</th>
                    <th>Kurang Pembayaran</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i =1;
                ?>
                @foreach($listPembayaran as $value)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$value->nama_lengkap}}</td>
                        <td>{{$value->nama_gelombang}}</td>
                        <td>Rp.{{number_format($value->setoran,2,',','.')}}</td>
                        <td>Rp.{{number_format($value->total_pembayaran,2,',','.')}}</td>
                        <td>Rp.{{number_format($value->total_pembayaran - $value->setoran,2,',','.')}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection