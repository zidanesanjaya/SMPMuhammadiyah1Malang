@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Edit Profile</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>Form Profile</h5>
        </div>
        <div class="col text-right">
            <a href="#" class="btn btn-warning btn-raised"> Ganti Password</a>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <h6 class="text-muted">ID PENDAFTARAN</h6>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->id }}" disabled>
                
                <h6 class="text-muted mt-3">EMAIL</h6>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->email }}" disabled>

                <h6 class="text-muted">USERNAME</h6>
                <input class="form-control pl-2" value="{{ Auth::user()->name }}" disabled>

            
                <h6 class="text-muted mt-5">NAMA LENGKAP <span class="text-danger">*</span></h6>
                <input class="form-control pl-2" value="" required>
                
                <h6 class="text-muted">TELEPON <span class="text-danger">*</span></h6>
                <input class="form-control pl-2" value="" required >

                <h6 class="text-muted mt-3">FOTO <span class="text-danger">*</span></h6>
                <div class="card-body">
                    <!-- <input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="assets/plugins/dropify/images/test-image-1.jpg" /> -->
                    <input type="file" id="input-file-now-custom-1" class="dropify" required/>
                </div>

                <button type="submit" class="btn btn-success btn-raised btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection