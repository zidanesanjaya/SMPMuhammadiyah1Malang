@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">EDIT VISI MISI</h4>
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
            <form action="{{route('store.visimisi')}}" method="post">
                @csrf
                <h6 class="text-muted">Visi</h6>
                <input type="text" class="form-control" placeholder="Masukan Visi" name="Visi">
                
                <h6 class="text-muted mt-5">Misi</h6>
                <input type="text" class="form-control" placeholder="Masukan Misi" name="Misi">

                <button type="submit" class="btn btn-success btn-raised btn-block mt-3">Simpan</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <h5 class="header-title">Visi Dan Misi</h5>
                    <div class="">
                        <table id="datatable2" class="table">
                            <thead>
                            <tr>
                                <th>Type</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>

                            <tbody>
                                @foreach($visimisi as $value)
                                    <tr>
                                        <td>{{$value->type}}</td>
                                        <td>{{$value->lainya}}</td>
                                        <td>
                                        <form action="{{ route('destroy.visimisi', $value->id) }}" method="POST">
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
    </div><!--end row-->
</div>

@endsection