@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Narahubung Lomba</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>Edit Narahubung</h5>
        </div>
        <div class="col text-right">
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
                <form action="{{route('update.narahubung', $narahubung->id)}}" method="post">
                @csrf
                @method('put')
                    <label for="">Nomor</label>
                    <input type="text" value="{{$narahubung->lainya}}" class="form-control" name="lainya"> 
                    <label for="">Nama</label>
                    <input type="text" value="{{$narahubung->var1}}" class="form-control" name="var1"> 

                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection