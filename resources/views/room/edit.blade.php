@extends('layouts.index')
@section ('content')
<div  class="col-sm-12">
  <div class="card"> 

    <div class="card-header">
      <strong>Input Data Kamar>
    </div>

    <div class="card-body card-block">
      <form method="POST" action="/room/{{$room->id}}/update">
        {{csrf_field()}}
        <div class="form-group">
          <label for="exampleInputEmail1">Nama Kamar</label>
          <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar" value="{{$room->nama}}">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Kategori</label>
          <select name="kategori" class="form-control" id="exampleFormControlSelect1">
           <option value="Laki-laki"@if($room->kategori == 'Laki-laki') selected @endif>Laki-Laki</option>
           <option value="Perempuan"@if($room->kategori == 'Perempuan') selected @endif>Perempuan</option>	
         </select>
       </div>
       <div class="form-group">
        <label for="exampleInputEmail1">Kapasitas</label>
        <input name="kapasitas" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->kapasitas}}" >
      </div>
      <div class="form-group row">
        <label class="col-12 col-form-label">Fasilitas</label> 
        <div class="col-8">
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="fasilitas" id="fasilitas_0" type="checkbox" class="custom-control-input" value="AC" @if($room->fasilitas == 'AC') checked @endif> 
              <label for="fasilitas_0" class="custom-control-label">AC</label>
            </div>
          </div>
          <div class="custom-controls-stacked">
            <div class="custom-control custom-checkbox">
              <input name="fasilitas" id="fasilitas_1" type="checkbox" class="custom-control-input" value="Kipas"@if($room->fasilitas == 'Kipas') checked @endif> 
              <label for="fasilitas_1" class="custom-control-label">Kipas Angin</label>
            </div>
          </div>
        </div>
      </div> 
      <div class="form-group">
        <label for="exampleInputEmail1">Harga Kamar</label>
        <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$room->harga}}">
      </div>

      <div class="form-group">
        <label for="status">status</label> 
        <select id="status" name="status" class="custom-select">
          <option value="ada"@if($room->status == 'ada') selected @endif>Ada</option>
          <option value="kosong"@if($room->status == 'kosong') selected @endif>Kosong</option>
        </select>
      </div> 
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
