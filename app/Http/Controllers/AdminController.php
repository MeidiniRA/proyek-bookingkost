<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_admin = DB::table('admin')->get();
        return view ('admin/index', compact('ar_admin'));
    }

    /// untuk membuat create data pada tabel admin
    public function create(Request $request){
        \App\Admin::create($request->all());
        return redirect ('/admin');
    }
    // untuk membuat edit data pada tabel adminadmin
    public function edit($id){
        $admin = \App\Admin::find($id);
        return view('admin/edit',['admin'=> $admin]);
    }
    // untuk membuat update data pada tabel admin
    public function update(Request $request, $id){
        $admin = \App\Admin::find($id);
        $admin->update($request->all());
        return redirect('admin/');

    }
    // untuk membuat delete data pada tabel admin
    public function delete($id){
        $admin = \App\Admin::find($id);
        $admin->delete($admin);
        return redirect('/admin');

    }
}
