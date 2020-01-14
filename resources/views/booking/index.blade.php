@extends('layouts.index')
@section('content')
@php
$ar_judul = ['No','Admin','Room','Customer','Tanggal Mulai', 'Tanggal Akhir', 'Tanggal Booking', 'Action'];
$no = 1;
@endphp
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
            <strong class="card-title">Data Booking</strong>
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
                @foreach($ar_judul as $jdl)
                <th>{{$jdl}}</th>
                @endforeach
              </tr>
            </thead>
            <tbody>
              @foreach($ar_booking as $booking)
              <tr>
                <td>{{$no++}}</td>
                <td>{{$booking->pemilik}}</td>
                <td>{{$booking->kamar}}</td>
                <td>{{$booking->pelanggan}}</td>
                <td>{{$booking->tgl_mulai}}</td>
                <td>{{$booking->tgl_akhir}}</td>
                <td>{{$booking->tgl_book}}</td>
                <td>
                  <a href="/booking/{{$booking->id}}/edit"><i class="fa fa-pencil"></i></a>
                    <a href="/booking/{{$booking->id}}/delete" onclick="return confirm('Are You Sure for Delete?')"><i class="fa fa-trash"></i></a>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Booking</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/booking/create">
          {{csrf_field()}}
          <div class="form-group row">
            <label for="room" class="col-4 col-form-label">Nama Admin</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"></div>
                </div>
                @php
                $rs = App\Admin::all();
                @endphp
                <select name="id_admin" class="form-control" >
                  <option value="">-- Pilih Admin --</option>
                  @foreach($rs as $row)
                  <option value="{{ $row->id }}">{{ $row->nama }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="room" class="col-4 col-form-label">Nama Kamar</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"></div>
                </div>
                @php
                $rs = App\Room::all();
                @endphp
                <select name="id_room" class="form-control" >
                  <option value="">-- Pilih Kamar --</option>
                  @foreach($rs as $row)
                  <option value="{{ $row->id }}">{{ $row->nama }} Kapasitas {{$row->kapasitas}} Fasilitas {{$row->fasilitas}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="room" class="col-4 col-form-label">Nama Customer</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"></div>
                </div>
                @php
                $rs = App\Customer::all();
                @endphp
                <select name="id_customer" class="form-control" >
                  <option value=""></option>
                  @foreach($rs as $row)
                  <option value="{{ $row->id }}">{{ $row->nama }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_mulai" class="col-4 col-form-label">Tanggal Mulai</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tgl_mulai" name="tgl_mulai" type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_akhir" class="col-4 col-form-label">Tanggal Akhir</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tgl_akhir" name="tgl_akhir" type="date" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tgl_book" class="col-4 col-form-label">Tanggal Booking</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div> 
                <input id="tgl_book" name="tgl_book" type="date" required="required" class="form-control">
              </div>
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    @endsection