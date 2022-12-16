@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">List Materi</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>Form Materi</h5>
        </div>
        <div class="col text-right">
            <a href="#" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#editPassword"> Tambah Judul Materi</a>
        </div>
    </div>
    <hr>
   
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Berhasil !</strong> {{ session()->get('success') }}
    </div>
    @endif
    <div class="row form-material">
        <div class="col-md-12">
            <div class="card-body table-responsive">
                <h5 class="header-title">List Materi</h5>
                <div class="">
                    <table id="datatable2" class="table">
                        <thead>
                            <tr>
                                <th>Nama Materi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($list_materi as $value)
                                <tr>
                                    <td>{{$value->nama_materi}}</td>
                                    <td>
                                        <form action="{{route('destroy.list_materi',$value->id)}}" method="POST">
                                            @csrf
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
</div>

<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Materi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('store.list_materi')}}" method="post" >
        @csrf
        <div class="modal-body">
            <h6 class="text-muted mt-3">Judul Materi</h6>
            <input type="text" class="form-control pl-2" name="nama_materi">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection