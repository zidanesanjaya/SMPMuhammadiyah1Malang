@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Halo {{ Auth::user()->name }} !</h4>
        </div>
    </div>


    <div class="col-sm-6 text-right">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard PPDB</h4>
        </div>
    </div>
    <div class="clearfix"></div>
    
    <div class="card-body">
        <h1>Selamat Datang di Website Resmi PPDB - SMP Muhammadiyah 1 Malang</h1>
        <hr>
        <h2>Langkah - langkah pendaftaran</h2>
        <ul class="list-group" style="font-size: 150%; font-family: 'Times New Roman', Times, serif;">
            <li class="list-group-item">1. Lengkapi Identitas Profile pada Menu Profile</li>
            <li class="list-group-item">2. Lengkapi Identitas Siswa dan Orang Tua pada Menu Form Wajib</li>
            <li class="list-group-item">3. Silahkan Melakukan Pembayaran pada Menu Pembayaran</li>
            <li class="list-group-item">4. Jika Belum Mendapatkan Status Gelombang Pendafaran, hubungi Nomor Smp Muhammadiyah 1 Malang</li>
        </ul>
    </div>
</div>
@endsection