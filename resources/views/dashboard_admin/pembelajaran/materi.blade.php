@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">List Source Materi</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>Form Source Materi</h5>
        </div>
        <div class="col text-right">
            <a href="#" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#editPassword"> Tambah Source Baru</a>
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
                <h5 class="header-title">List Source Materi</h5>
                <div class="">
                    <table id="datatable2" class="table">
                        <thead>
                            <tr>
                                <th>Nama Materi</th>
                                <th>Nama Guru</th>
                                <th>Materi Ke</th>
                                <th>Untuk Kelas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($materi as $value)
                                <tr>
                                    <td>{{$value->nama_materi}}</td>
                                    <td>{{$value->nama_guru}}</td>
                                    <td>Materi Ke-{{$value->materi_ke}}</td>
                                    <td>{{$value->kelas}}</td>
                                    <td>
                                        <form action="{{route('destroy.materi',$value->id)}}" method="POST">
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
      <form action="{{route('store.materi')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <h6 class="text-muted mt-3">Materi Ke</h6>
            <input type="number" class="form-control pl-2" name="minggu_ke" required>

            <h6 class="text-muted mt-3">List Kelas <span class="text-danger">*</span></h6>
                <select name="list_kelas" class="form-control">
                    <option value="Kelas 7">kelas 7</option>
                    <option value="Kelas 8">kelas 8</option>
                    <option value="Kelas 9">kelas 9</option>
                </select>
            <h6 class="text-muted mt-3">Nama Guru <span class="text-danger">*</span></h6>
                <select name="id_guru" class="form-control">
                    @foreach($guru as $value)
                        <option value="{{$value->id}}">{{$value->nama_guru}}</option>
                    @endforeach
                </select>
            <h6 class="text-muted mt-3">Nama Materi <span class="text-danger">*</span></h6>
                <select name="id_list_materi" class="form-control">
                    @foreach($list_materi as $value)
                        <option value="{{$value->id}}">{{$value->nama_materi}}</option>
                    @endforeach
                </select>

            <h6 class="text-muted mt-3">Sumber Materi 1</h6>
            <input type="file" class="form-control pl-2" name="src1">

            <h6 class="text-muted mt-3">Sumber Materi 2</h6>
            <input type="file" class="form-control pl-2" name="src2">

            <h6 class="text-muted mt-3">Sumber Materi 3</h6>
            <input type="file" class="form-control pl-2" name="src3">

        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection