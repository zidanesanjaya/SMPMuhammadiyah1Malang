@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Halo {{ Auth::user()->name }} !</h4>
        </div>
    </div>
    <div class="col-sm-6 text-right">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard Admin</h4>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
@endsection