@extends('layouts.index')
@section ('content')
<div class="breadcrumbs">
  <div class="col-sm-4">
  </div>
</div>
<div class="content mt-3">
  <div class="animated fadeIn">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Data Admin</strong>
           <button type="button" class="float-right" data-toggle="modal" data-target="#exampleModal">
              <i class="fa fa-plus-circle fa-2x" style="color: blue;">
              </i>
            </button>
          </div>
        </div>
        <div class="card-body">

          <table id="bootstrap-data-table-export" class="table table-striped table-bordered no-footer">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Admin</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
               @php
              $no = 1;
              @endphp
              @foreach($ar_admin as $admin)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$admin->nama}}</td>
                <td>
                 <a href="/admin/{{$admin->id}}/edit"><i class="fa fa-pencil"></i></a>
                 <a href="/admin/{{$admin->id}}/delete" onclick="return confirm('Are You Sure for Delete?')"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
              @endforeach
            </tbody> 
          </table>
        </div>
      </div>
    </div>
  </div>
</div><!-- .animated -->
</div><!-- .content -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/admin/create">
          {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Admin</label>
            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama admin">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection