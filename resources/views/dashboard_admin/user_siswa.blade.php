@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Siswa</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>List Siswa Terdaftar</h5>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Nama Lengkap</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                @foreach($listUser as $listUser)
                    <tr>
                        <td>{{ $listUser->name}}</td>
                        <td>{{ $listUser->email }}</td>
                        <td>{{ $listUser->nama_lengkap }}</td>
                        <td>
                            <a class="btn btn-warning btn-raised" href="#"><i class="mdi mdi-pencil-box"></i> Edit</a>                               
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
@endsection