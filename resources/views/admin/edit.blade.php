@extends('layouts.index')
@section ('content')
<div  class="col-sm-12">
  <div class="card"> 

    <div class="card-header">
      <strong>Input Data Admin</strong>
    </div>

    <div class="card-body card-block">
            <form class="user" method="POST" action="/admin/{{$admin->id}}/update">
               {{csrf_field()}}
            <div class="form-group row">
    <label for="pemilik" class="col-4 col-form-label">Nama Admin </label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="pemilik" name="pemilik" type="text" class="form-control" required="required" value="{{$admin->nama}}">
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