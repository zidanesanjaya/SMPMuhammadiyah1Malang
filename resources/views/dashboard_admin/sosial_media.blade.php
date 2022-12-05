@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Sosial Media</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>List Sosial Media</h5>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Sosial Media</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Aktif</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no=1;
                ?>
                @foreach($sosmed as $sosmed)
                    <tr>
                        <td>{{ $sosmed->nama}}</td>
                        <td>{{ $sosmed->link }}</td>
                        <td><?php 
                                if($sosmed->status == 1){
                            ?>
                                <span class="badge badge-success">Aktif</span>
                            <?php
                                } else{
                            ?>
                                <span class="badge badge-danger">Tidak Aktif</span>
                            <?php
                                }
                            ?>
                        </td>
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