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
        {{ session()->get('msg-red') }}
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
            <form action="{{route('store.cermus')}}" method="post" enctype="multipart/form-data">
                @csrf
                <h6 class="text-muted mt-3">Foto <span class="text-danger">*</span></h6>
                <div class="card-body">
                    <input type="file" id="input-file-now-custom-1" class="dropify"  name="foto" required/>
                </div>
                <h6 class="text-muted mt-3">Judul <span class="text-danger">*</span></h6>
                <input type="text" name="judul" class="form-control" required>

                <h6 class="text-muted mt-3">Deskripsi <span class="text-danger">*</span></h6>
                <textarea id="elm1" name="deskripsi"></textarea>

                <!-- <textarea class="form-control" id="exampleTextarea2" rows="3" name="deskripsi" required></textarea> -->

                <button type="submit" class="btn btn-success btn-raised btn-block mt-3">Simpan</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <h5 class="header-title">Galeri</h5>
                    <div class="">
                        <table id="datatable2" class="table">
                            <thead>
                            <tr>
                                <th>Judul</th>
                                <th>Dibuat Oleh</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($cermus as $cermus)
                                <tr>
                                    <td>{{$cermus->judul}}</td>
                                    <td>{{$cermus->created_by}}</td>
                                    <td><img src="/storage/lainya/{{$cermus->foto}}" width="200px" alt=""></td>
                                    <td>
                                    <form action="{{route('destroy.cermus',$cermus->id)}}" method="POST">
                                        @csrf
                                        <a href="{{route('page.edit_cermus',$cermus->id)}}" class="btn btn-warning btn-raised" type="button"><i class="mdi mdi-pencil"></i> Edit</a>
                                        {{ method_field('delete')}}
                                        <button class="btn btn-danger btn-raised" type="submit"><i class="mdi mdi-delete"></i> Hapus</button>
                                    </form>
                                    </td>
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

@endsection