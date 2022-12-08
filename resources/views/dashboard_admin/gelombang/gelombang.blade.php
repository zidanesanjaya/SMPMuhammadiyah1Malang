@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Gelombang</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>List Gelombang</h5>
        </div>
        <div class="col text-right">
            <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#tambahGelombang"> Tambah Gelombang</button>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Gelombang</th>
                        <th>Biaya</th>
                        <th>Mulai</th>
                        <th>Akhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                @foreach($gelombang as $gelombang)
                    <tr>
                        <td>{{ $gelombang->nama_gelombang }}</td>
                        <td>Rp. {{ number_format($gelombang->biaya,2,',','.')}}</td>
                        <td>{{ date_format(date_create($gelombang->mulai),"d-M-Y") }}</td>
                        <td>{{ date_format(date_create($gelombang->akhir),"d-M-Y") }}</td>
                        <td>
                            <form action="{{ route('gelombang.destroy', $gelombang->id) }}" method="POST">
                            <a class="btn btn-warning btn-raised" href="{{route('gelombang_update' , $gelombang->id)}}"><i class="mdi mdi-pencil-box"></i> Edit</a>
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
<div class="modal fade" id="tambahGelombang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Gelombang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('store.gelombang')}}" method="post" >
        @csrf
        <div class="modal-body">
            <h6 class="text-muted mt-3">Nama Gelombang</h6>
            <input type="text" class="form-control pl-2" name="nama_gelombang">

            <h6 class="text-muted">Biaya Gelombang</h6>
            <input class="form-control pl-2 mb-4" type="number" name="biaya">

            <h6 class="text-muted">Mulai Gelombang</h6>
            <input class="form-control pl-2 mb-4" type="date" name="mulai">

            <h6 class="text-muted">Akhir Gelombang</h6>
            <input class="form-control pl-2 mb-4" type="date" name="akhir">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>


@endsection