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
</div>
<!-- Column -->

<div class="row">
    <div class="col-sm-12 col-md-6 col-xl-3">
        <div class="card bg-warning m-b-30">
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-check"></i>
                        </div>
                    </div>
                    <div class="col-8 ml-auto align-self-center text-center">
                        <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">{{$sizeUsers}}</h5>
                            <p class="mb-0 ">Siswa Terdaftar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-xl-3">
        <div class="card bg-primary m-b-30">
            <div class="card-body">
                <div class="d-flex row">
                    <div class="col-3 align-self-center">
                        <div class="round">
                            <i class="mdi mdi-account-key"></i>
                        </div>
                    </div>
                    <div class="col-8 ml-auto align-self-center text-center">
                        <div class="m-l-10 text-white float-right">
                            <h5 class="mt-0 round-inner">{{$sizeAdmin}}</h5>
                            <p class="mb-0 ">Admin Terdaftar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection