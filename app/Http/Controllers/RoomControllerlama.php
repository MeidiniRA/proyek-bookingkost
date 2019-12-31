<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request){
    	if ($request->has('cari')) {
    		$data_room = \App\Room::where('nama', 'LIKE', '%' .$request->cari.'%')->get();
    	} else {

    	$data_room = \App\Room::all();
    }

    	return view ('room.index', ['data_room' => $data_room]);
    }
    // untuk membuat create data pada tabel room
    public function create(Request $request){
    	\App\Room::create($request->all());
    	return redirect ('/room');
    }
    // untuk membuat edit data pada tabel room
    public function edit($id){
    	$room = \App\Room::find($id);
    	return view('room/edit',['room'=> $room]);

    }
    // untuk membuat update data pada tabel room
    public function update(Request $request, $id){
    	$room = \App\Room::find($id);
    	$room->update($request->all());
    	return redirect('room/');

    }
    // untuk membuat delete data pada tabel room
    public function delete($id){
    	$room = \App\Pegawai::find($id);
    	$room->delete($room);
    	return redirect('/room');

    }
}
