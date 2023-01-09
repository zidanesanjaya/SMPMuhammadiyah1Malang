@extends('layout.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <div class="page-title-box">
            <h4 class="page-title">List Guru</h4>
        </div>
    </div>
</div>
<div class="container bg-white border p-3">
    <div class="row">
        <div class="col">
            <h5>Form Guru</h5>
        </div>
        <div class="col text-right">
            <a href="#" class="btn btn-warning btn-raised" data-toggle="modal" data-target="#editPassword"> Tambah Guru</a>
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
                <h5 class="header-title">List Guru</h5>
                <div class="">
                    <table id="datatable2" class="table">
                        <thead>
                            <tr>
                                <th>Nama Guru</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($guru as $value)
                                <tr>
                                    <td>{{$value->nama_guru}}</td>
                                    <td>
                                        <form action="{{route('destroy.guru',$value->id)}}" method="POST">
                                            @csrf
                                            {{ method_field('delete')}}
                                            <button class="btn btn-danger btn-raised show_confirm" data-toggle="tooltip" type="submit"><i class="mdi mdi-delete"></i> Hapus</button>
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
</div>

<div class="modal fade" id="editPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Guru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{route('store.guru')}}" method="post" >
        @csrf
        <div class="modal-body">
            <h6 class="text-muted mt-3">Nama Guru</h6>
            <input type="text" class="form-control pl-2" name="nama_guru">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Apakah anda yakin ingin menghapus guru ini ?`,
              text: "Mengahpus Guru akan Menghapus list Materi Yang Sudah Ada Sesuai Dengan Guru Yang Dihapus",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
@endsection