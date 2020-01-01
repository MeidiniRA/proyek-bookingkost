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
                                <strong class="card-title">Data Booking</strong>
                                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModal">
                              Tambah Data
                          </button>
                            </div>
                      </div>
                            <div class="card-body">

                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered no-footer">
                                    <thead>
                                        <tr>
                                            <th>Admin</th>
                                            <th>Room</th>
                                            <th>Customer</th>
                                            <th>Tanggal Mulai</th>
                                            <th>Tanggal Akhir</th>
                                            <th>Tanggal Booking</th>
                                            <th>Aksi</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ar_booking as $booking)
                                        <tr>
                                            <td>{{$booking->pemilik}}</td>
                                            <td>{{$booking->kamar}}</td>
                                            <td>{{$booking->pelanggan}}</td>
                                            <td>{{$booking->tgl_mulai}}</td>
                                            <td>{{$booking->tgl_akhir}}</td>
                                            <td>{{$booking->tgl_book}}</td>
                                            <td>
                                              <a href="/booking/{{$booking->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                              <a href="/booking/{{$booking->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure for Delete?')">Dalete</a>
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
        <form method="POST" action="/booking/create">
        {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Admin</label>
    <input name="id_admin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Kamar</label>
    <input name="id_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Pelanggan</label>
    <input name="id_customer" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Mulai</label>
    <input name="tgl_mulai" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Akhir</label>
    <input name="tgl_akhir" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Booking</label>
    <input name="tgl_book" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input nama kamar">
  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
      </div>
    </div>
  </div>
</div>

@endsection