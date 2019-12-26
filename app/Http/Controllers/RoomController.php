<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){

    	$data_room = \App\Room::all();

    	return view ('room.index', ['data_room' => $data_room]);
    }
    public function create(Request $request){
    	\App\Room::create($request->all());
    	return redirect ('/room');
    }
}
