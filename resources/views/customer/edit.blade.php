@extends('layouts.index')
@section ('content')
<div  class="col-sm-12">
  <div class="card"> 

    <div class="card-header">
      <strong>Input Data Kamar>
    </div>

    <div class="card-body card-block">
      <form method="POST" action="/customer/{{$customer->id}}/update">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar" value="{{$customer->nama}}">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Jenis Kelamin</label>
          <select name="jk" class="form-control" id="exampleFormControlSelect1">
           <option value="Laki-laki"@if($customer->jk == 'Laki-laki') selected @endif>Laki-Laki</option>
           <option value="Perempuan"@if($customer->jk == 'Perempuan') selected @endif>Perempuan</option>  
         </select>
       </div>

       <div class="form-group">
          <label for="exampleFormControlSelect1">Status</label>
          <select name="status" class="form-control" id="exampleFormControlSelect1">
           <option value="Menikah"@if($customer->status == 'Menikah') selected @endif>Menikah</option>
           <option value="Belum"@if($customer->status == 'Belum') selected @endif>Belum</option>  
         </select>
       </div>


       <div class="form-group">
        <label for="exampleInputEmail1">No. HP</label>
        <input name="hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->hp}}" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">E-Mail</label>
        <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->email}}" >
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Alamat</label>
        <textarea name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$customer->alamat}}" >{{$customer->alamat}} </textarea>
      </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection