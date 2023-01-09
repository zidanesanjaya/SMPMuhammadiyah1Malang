@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Jumlah</h4>
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
            <form action="{{route('update.jumlah')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <h6 class="text-muted mt-3">Jumlah Siswa <span class="text-danger">*</span></h6>
                <input type="number" name="siswa" class="form-control" value="{{$jml_siswa->lainya}}" required>

                <h6 class="text-muted mt-3">Jumlah Guru <span class="text-danger">*</span></h6>
                <input type="number" name="guru" class="form-control" value="{{$jml_guru->lainya}}" required>

                <h6 class="text-muted mt-3">Jumlah Mata Pelajaran <span class="text-danger">*</span></h6>
                <input type="number" name="mapel" class="form-control" value="{{$jml_mapel->lainya}}" required>

                <h6 class="text-muted mt-3">Jumlah Ekstrakurikuler <span class="text-danger">*</span></h6>
                <input type="number" name="ekskul" class="form-control" value="{{$jml_ekskul->lainya}}" required>

                <button type="submit" class="btn btn-success btn-raised btn-block mt-3">Simpan</button>
            </form>
        </div>
    </div>

</div>

@endsection