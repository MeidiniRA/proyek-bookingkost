@extends('layouts.index')
@section ('content')
<div  class="col-sm-12">
  <div class="card"> 

    <div class="card-header">
      <strong>Input Data Booking</strong>
    </div>

    <div class="card-body card-block">
            <form class="user" method="POST" action="/booking/{{$booking->id}}/update">
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
                <select name="pemilik" class="form-control" >
                  @foreach($rs as $row)
                  $row = ($d->id_admin == $rs->id) ? 'selected' : '';
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
                <select name="kamar" class="form-control" >
                  @foreach($rs as $row)
                  $row = ($d->id_room == $rs->id) ? 'selected' : '';
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
                <select name="pelanggan" class="form-control" >
                  @foreach($rs as $row)
                  $row = ($d->id_customer == $rs->id) ? 'selected' : '';
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
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
    </form>
</div>
</div>
@endsection