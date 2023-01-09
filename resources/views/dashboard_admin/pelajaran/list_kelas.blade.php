@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">kelas</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>List Kelas</h5>
        </div>
        <div class="col text-right">
            <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#tambahKelas"> Tambah kelas</button>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                @foreach($listKelas as $listKelas)
                    <tr>
                        <td>{{ $no}}</td>
                        <td>{{ $listKelas->nama_kelas }}</td>
                        <td>
                            <form action="{{ route('kelas.destroy', $listKelas->id) }}" method="POST">
                            <a class="btn btn-primary btn-raised" data-toggle="modal" data-target="#listMateri"><i class="mdi mdi-book-open-page-variant"></i> List Materi</a>
                                @csrf
                                {{ method_field('delete')}}
                                <button class="btn btn-danger btn-raised" type="submit"><i class="mdi mdi-delete"></i> Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                        $no++;
                    ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="tambahKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('store.kelas')}}" method="post" >
        @csrf
        <div class="modal-body">
            <h6 class="text-muted mt-3">Nama Kelas</h6>
            <input type="text" class="form-control pl-2" name="nama_kelas">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="listMateri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">List Materi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <table id="datatable" class="table table-bordered mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Minggu Ke</th>
                    <th>Link Materi</th>
                </tr>
            </thead>
            <tbody>
       
            </tbody>
        </table>
    </div>
  </div>
</div>
@endsection