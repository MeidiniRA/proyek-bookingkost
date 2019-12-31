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
                                <strong class="card-title">Data Room</strong>
                                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
                              Tambah Data
                          </button>
                            </div>
                      </div>
                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered no-footer">
                                    <thead>
                                        <tr>
                                            <th>Nama Kamar</th>
                                            <th>Kategori</th>
                                            <th>Kapasitas</th>
                                            <th>Fasilitas</th>
                                            <th>Harga</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ar_room as $room)
                                        <tr>
                                            <td>{{$room->nama}}</td>
                                            <td>{{$room->kategori}}</td>
                                            <td>{{$room->kapasitas}}</td>
                                            <td>{{$room->fasilitas}}</td>
                                            <td>Rp.{{$room->harga}}/bln</td>
                                            <td>{{$room->status}}</td>
                                            <td>
                                              <a href="/room/{{$room->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                              <a href="/room/{{$room->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure for Delete?')">Dalete</a>
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

@endsection