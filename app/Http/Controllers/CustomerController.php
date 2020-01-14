<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ar_customer = DB::table('customer')->get();
        return view ('customer/index', compact('ar_customer'));
    }

    /// untuk membuat create data pada tabel customer
    public function create(Request $request){
        \App\Customer::create($request->all());
        return redirect ('/customer');
    }
    // untuk membuat edit data pada tabel customer
    public function edit($id){
        $customer = \App\Customer::find($id);
        return view('customer/edit',['customer'=> $customer]);

    }
    // untuk membuat update data pada tabel customer
    public function update(Request $request, $id){
        $customer = \App\Customer::find($id);
        $customer->update($request->all());
        return redirect('customer/');

    }
    // untuk membuat delete data pada tabel customer
    public function delete($id){
        $customer = \App\Customer::find($id);
        $customer->delete($customer);
        return redirect('/customer');

    }
}