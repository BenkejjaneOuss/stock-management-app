<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Supplier;

class SupplierController extends Controller
{
    //
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::where('archive', 0)->get(); 
        return view('supplier',compact('suppliers'));
    }

    public function addSupplier(Request $request){
        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        
        $supplier->save();
        return redirect('/supplier');      
    }

    public function deleteSupplier($id){
        $supplier = Supplier::find($id);
        $supplier->archive = 1;

        $supplier->save();
    }

    public function updateSupplierName(Request $request){
        $supplier = Supplier::find($request->id);
        $supplier->name = $request->name;

        $supplier->save();
    }

    public function updateSupplierEmail(Request $request){
        $supplier = Supplier::find($request->id);
        $supplier->email = $request->email;

        $supplier->save();
    }
    public function updateSupplierPhone(Request $request){
        $supplier = Supplier::find($request->id);
        $supplier->phone = $request->phone;

        $supplier->save();
    }
    public function updateSupplierAddress(Request $request){
        $supplier = Supplier::find($request->id);
        $supplier->address = $request->address;

        $supplier->save();
    }
}
