@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Update Gelombang</h4>
        </div>
    </div>   
</div>
<div class="container bg-white border p-3">
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <form action="{{route('update.gelombang')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" name="id" value="{{ $gelombang->id }}">
                <h6 class="text-muted">NAMA GELOMBANG</h6>
                <input type="text" class="form-control" value="{{ $gelombang->nama_gelombang }}" name="nama_gelombang">
                
                <h6 class="text-muted mt-3">BIAYA</h6>
                <input type="text" class="form-control" value="{{ $gelombang->biaya }}" name="biaya">

                <h6 class="text-muted">MULAI</h6>
                <input class="form-control" type="date" value="{{ $gelombang->mulai }}" name="mulai">
                
                <h6 class="text-muted">SAMPAI</h6>
                <input type="date" class="form-control" value="{{ $gelombang->akhir }}" name="akhir"> 

                <button type="submit" class="btn btn-success btn-raised btn-block">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection