@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">Admin</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>List Admin & User Terdaftar</h5>
        </div>
        <div class="col text-right">
            <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#tambahUser"> Tambah User</button>
        </div>
    </div>
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <table id="datatable" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
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
                        <td>{{ $listUser->role}}</td>
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

<!-- Modal -->
<div class="modal fade" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User & Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('admin.add_user')}}" method="post" >
        @csrf
        <div class="modal-body">
            <h6 class="text-muted mt-3">Username</h6>
            <input type="text" class="form-control pl-2" name="name">

            <h6 class="text-muted">Email</h6>
            <input class="form-control pl-2 mb-4" type="email" name="email">

            <h6 class="text-muted">Password</h6>
            <input class="form-control pl-2 mb-4" type="password" name="password">

            <h6 class="text-muted">Role</h6>
            <select class="form-control" name="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection