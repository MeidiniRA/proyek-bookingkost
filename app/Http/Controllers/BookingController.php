<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {

        // $ar_booking = DB::table('booking')->get();
        $ar_booking= DB::table('booking')
        ->join('admin','admin.id', '=','booking.id_admin')
        ->join('room','room.id', '=','booking.id_room')
        ->join('customer','customer.id', '=','booking.id_customer')
        ->select('booking.*', 'admin.nama AS pemilik','room.nama AS kamar','customer.nama AS pelanggan')
        ->get();
        return view ('booking/index', compact('ar_booking'));
    }

    /// untuk membuat create data pada tabel room
    public function create(Request $request){
        \App\Booking::create($request->all());
        return redirect ('/booking');
    }
    // untuk membuat edit data pada tabel room
    public function edit($id){
        $booking = \App\Booking::find($id);
        return view('booking/edit',['booking'=> $booking]);

    }
    // untuk membuat update data pada tabel room
    public function update(Request $request, $id){
        $booking = \App\Booking::find($id);
        $booking->update($request->all());
        return redirect('booking/');

    }
    // untuk membuat delete data pada tabel room
    public function delete($id){
        $booking = \App\Booking::find($id);
        $booking->delete($booking);
        return redirect('/booking');

    }
}
