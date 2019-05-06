<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Num_Phone;
use \App\Operator;

class Num_PhoneController extends Controller
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
        $numbers = Num_Phone::where('archive', 0)->with('operators')->get(); 
        $operators = Operator::where('archive', 0)->get();
        return view('num_phone',compact('numbers','operators'));
    }

    public function addNumber(Request $request){
        $number = new Num_Phone();
        $number->number = $request->number;
        $number->operator_id = $request->operator_id;
        
        $number->save();
        return redirect('/num-phone');      
    }

    public function deleteNumber($id){
        $number = Num_Phone::find($id);
        $number->archive = 1;

        $number->save();
    }

    public function updateNumber(Request $request){
        $number = Num_Phone::find($request->id);
        $number->number = $request->number;

        $number->save();
    }

    public function updateOperator(Request $request){
        $number = Num_Phone::find($request->id);
        $number->operator_id = $request->operator_id;

        $number->save();
    }

}
