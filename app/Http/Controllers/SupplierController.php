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
        $suppliers = Supplier::where('archive', 0)->orderBy('created_at', 'desc')->get(); 
        return view('supplier',compact('suppliers'));
    }

    public function addSupplier(Request $request){

        $result = false;

        $supplier = new Supplier();
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        
        if($supplier->save()){
            $result = true;
        }

        return Response()->json(compact('result','supplier'));        
    }

    public function deleteSupplier($id){

        $result = false;
        $supplier = Supplier::find($id);
        $supplier->archive = 1;

        if($supplier->save()){
            $result = true;
        }
        
        
        return Response()->json(compact('result'));
    }

    public function updateSupplier(Request $request){
        $result = false;

        $supplier = Supplier::find($request->id);
        $supplier->name = $request->name;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->address = $request->address;
        
        if($supplier->save()){
            $result = true;
        }

        return Response()->json(compact('result'));   
    }

}
