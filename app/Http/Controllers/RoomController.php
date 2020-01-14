<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\RoomExport;
use Maatwebsite\Excel\Facades\Excel;
use DB;
use PDF;
use App\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_room = DB::table('room')->get();
        return view ('room/index', compact('ar_room'));
    }

    /// untuk membuat create data pada tabel room
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
        $room = \App\Room::find($id);
        $room->delete($room);
        return redirect('/room');

    }
    public function export() 
    {
        return Excel::download(new RoomExport, 'data-room.xlsx');
    }
    public function exportPdf() 
    {
        $room = \App\Room::all();
        $pdf = PDF::loadView('export.roompdf',['room' => $room]);
        return $pdf->download('data-room.pdf');
    }

}
