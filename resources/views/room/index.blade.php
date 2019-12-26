<!DOCTYPE html>
<html>
<head>
	<title>Ini Adalah table room</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-12">
		<h1>Data Kamar</h1>
		<div class= "col-12">
			<!-- Button trigger modal -->
<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
		</div>
		<br>
		<br>
<table class="table table-striped">
		<tr>
			<th>Nama Kamar</th>
			<th>Kategori</th>
			<th>Kapasitas</th>
			<th>Fasilitas</th>
			<th>Harga</th>
			<th>Status</th>
		</tr>
		@foreach($data_room as $room)
		<tr>
		<td>{{$room->nama}}</td>
		<td>{{$room->kategori}}</td>
		<td>{{$room->kapasitas}}</td>
		<td>{{$room->fasilitas}}</td>
		<td>Rp.{{$room->harga}}/bln</td>
		<td>{{$room->status}}</td>
		</tr>
		@endforeach
</table>
</div>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kamar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/room/create">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kamar</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori</label>
    <select name="kategori" class="form-control" id="exampleFormControlSelect1">
    	<option value="Laki-laki">Laki-Laki</option>
    	<option value="Perempuan">Perempuan</option>	
    </select>
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Kapasitas</label>
    <input name="kapasitas" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group row">
    <label class="col-4 col-form-label">Fasilitas</label> 
    <div class="col-8">
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="fasilitas" id="fasilitas_0" type="checkbox" class="custom-control-input" value="ac"> 
          <label for="fasilitas_0" class="custom-control-label">AC</label>
        </div>
      </div>
      <div class="custom-controls-stacked">
        <div class="custom-control custom-checkbox">
          <input name="fasilitas" id="fasilitas_1" type="checkbox" class="custom-control-input" value="kipas"> 
          <label for="fasilitas_1" class="custom-control-label">Kipas Angin</label>
        </div>
      </div>
    </div>
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Harga Kamar</label>
    <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

   <div class="form-group">
    <label for="status">status</label> 
      <select id="status" name="status" class="custom-select">
        <option value="ada">Ada</option>
        <option value="kosong">Kosong</option>
      </select>
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
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>