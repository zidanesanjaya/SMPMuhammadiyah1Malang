@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Cerita Muhasa</h4>
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
    <div class="row form-material">
        <div class="col-md-12">
            <form action="{{route('update.cermus', $cermus->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h6 class="text-muted mt-3">Foto <span class="text-danger">*</span></h6>
                <div class="card-body">
                    <input type="file" id="input-file-now-custom-1" class="dropify"  name="foto" data-default-file="/storage/lainya/{{$cermus->foto}}"/>
                </div>
                <h6 class="text-muted mt-3">Judul <span class="text-danger">*</span></h6>
                <input type="text" name="judul" class="form-control" value="{{$cermus->judul}}" required>

                <h6 class="text-muted mt-3">Deskripsi <span class="text-danger">*</span></h6>
                <textarea id="elm1" name="deskripsi">{{$cermus->deskripsi}}</textarea>

                <button type="submit" class="btn btn-success btn-raised btn-block mt-3">Simpan</button>
            </form>
        </div>
    </div>

</div>

@endsection