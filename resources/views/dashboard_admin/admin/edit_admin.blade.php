@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Edit Admin / User</h4>
        </div>
    </div>   
</div>
<div class="container bg-white border p-3">
    <hr>

    <div class="row form-material">
        <div class="col-md-12">
            <form action="{{route('update.admin')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <input type="hidden" id="role_input" value="{{$admin->role}}">
                <h6 class="text-muted mt-3">Username</h6>
                <input type="text" class="form-control" value="{{ $admin->name }}" name="name" readonly>

                <h6 class="text-muted">Email</h6>
                <input class="form-control" type="text" value="{{ $admin->email }}" name="email" readonly> 

                <input type="hidden" name="id" value="{{ $admin->id }}">
                <h6 class="text-muted">Role</h6>

                <select class="form-control" name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>

                <h6 class="text-muted mt-5">Password Baru (Kosongkan Jika Tidak Ingin Mengganti)</h6>
                <input class="form-control" type="text" value="" name="password"> 

                <button type="submit" class="btn btn-success btn-raised btn-block mt-5">Simpan</button>
            </form>
        </div>
    </div>
</div>

<script>
     $(document).ready(function() {
        const val = $("#role_input").val();;
        $("#role").val(val).change();
    });  
</script>
@endsection