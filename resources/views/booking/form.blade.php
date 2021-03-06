@extends('layouts.index')
@section ('content')
<div  class="col-sm-12">
  <div class="card"> 

    <div class="card-header">
      <strong>Input Data Booking</strong>
    </div>

    <div class="card-body card-block">
            <form method="POST" action="/booking/create">
               {{csrf_field()}}
            <div class="form-group row">
    <label for="pemilik" class="col-4 col-form-label">Nama Admin</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="pemilik" name="pemilik" type="text" class="form-control" required="required" value="{{$booking->pemilik}}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="kamar" class="col-4 col-form-label">Nama Kamar</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="kamar" name="kamar" type="text" class="form-control" required="required" value="{{$booking->kamar}}">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="pelanggan" class="col-4 col-form-label">Nama Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="pelanggan" name="pelanggan" type="text" class="form-control" required="required" value="{{$booking->pelanggan}}">
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
        <input id="tgl_mulai" name="tgl_mulai" type="text" class="form-control" value="{{$booking->tgl_mulai}}">
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
        <input id="tgl_akhir" name="tgl_akhir" type="text" class="form-control" value="{{$booking->tgl_akhir}}">
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
        <input id="tgl_book" name="tgl_book" type="text" required="required" class="form-control" value="{{$booking->tgl_book}}">
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