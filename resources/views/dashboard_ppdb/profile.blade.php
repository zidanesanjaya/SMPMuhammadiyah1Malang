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
            <a href="#" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#editPassword"> Ganti Password</a>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <form action="{{route('update.profile')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h6 class="text-muted">ID PENDAFTARAN</h6>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->id }}" disabled>
                <input type="hidden" class="form-control pl-2" name="id_user" value="{{ Auth::user()->id }}">

                <h6 class="text-muted mt-3">EMAIL</h6>
                <input type="text" class="form-control pl-2" value="{{ Auth::user()->email }}" disabled>

                <h6 class="text-muted">USERNAME</h6>
                <input class="form-control pl-2" value="{{ Auth::user()->name }}" disabled>

                <h6 class="text-muted mt-5">NAMA LENGKAP <span class="text-danger">*</span></h6>
                <input class="form-control pl-2" name="nama_lengkap" value="{{ Auth::user()->nama_lengkap }}" required>
                
                <h6 class="text-muted">TELEPON <span class="text-danger">*</span></h6>
                <input class="form-control pl-2" name="telepon" value="{{Auth::user()->telepon}}" required>

                <h6 class="text-muted mt-3">FOTO </h6>
                <div class="card-body">
                    <input type="file" id="input-file-now-custom-1" class="dropify"  name="foto" data-default-file="/storage/avatars/{{Auth::user()->path_foto}}"/>
                </div>

                <button type="submit" class="btn btn-success btn-raised btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Gelombang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('update.password_siswa', Auth::user()->id)}}" method="post" >
        @csrf
        @method('put')
        <div class="modal-body">
            <h6 class="text-muted mt-3">Password Baru</h6>
            <input type="text" class="form-control pl-2" name="password">

        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection