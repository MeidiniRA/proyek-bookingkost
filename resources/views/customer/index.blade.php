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
            <strong class="card-title">Data Customer</strong>
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
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>HP</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @php
              $no = 1;
              @endphp
              @foreach($ar_customer as $customer)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$customer->nama}}</td>
                <td>{{$customer->jk}}</td>
                <td>{{$customer->status}}</td>
                <td>{{$customer->hp}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->alamat}}</td>
                <td>
                  <a href="/customer/{{$customer->id}}/edit"><i class="fa fa-pencil"></i></a>
                    <a href="/customer/{{$customer->id}}/delete" onclick="return confirm('Are You Sure for Delete?')"><i class="fa fa-trash"></i></a>
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
</div>
 <!-- .content -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Customer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/customer/create">
          {{csrf_field()}}
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Input nama" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="jk" id="jk_0" type="checkbox" class="custom-control-input" value="Laki-Laki"> 
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-checkbox custom-control-inline">
                <input name="jk" id="jk_1" type="checkbox" class="custom-control-input" value="Perempuan"> 
                <label for="jk_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Status</label> 
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="status" id="status_0" type="radio" class="custom-control-input" value="Menikah" required="required"> 
                <label for="status_0" class="custom-control-label">Menikah</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="status" id="status_1" type="radio" class="custom-control-input" value="Belum" required="required"> 
                <label for="status_1" class="custom-control-label">Belum</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="hp" class="col-4 col-form-label">No. Hp</label> 
            <div class="col-8">
              <input id="hp" name="hp" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">E-mail</label> 
            <div class="col-8">
              <input id="email" name="email" type="text" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
              <textarea id="alamat" name="alamat" type="text" class="form-control" required="required"></textarea>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
          @endsection