<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Recharge_Sale;
use  \App\Num_Phone;
use  \App\Operator;

class RechargeSaleController extends Controller
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

        $recharges_sale = Recharge_Sale::with('num_phones')->get(); 
        $num_phones = Num_Phone::where('archive', 0)->with('operators')->get();
        return view('recharge_sale',compact('recharges_sale','num_phones'));
    }

    public function addRechargeSale(Request $request){
        $num_phone = Num_Phone::find($request->num_phone_id);
    if($request->montant <= $num_phone->solde){
        $recharge_sale = new Recharge_Sale();
        $recharge_sale->montant = $request->montant;
        $recharge_sale->num_client = $request->num_client;
        $recharge_sale->num_phone_id = $request->num_phone_id;
        $recharge_sale->save();

        $num_phone->solde = $num_phone->solde - $request->montant;

        $num_phone->save();
        return redirect('/recharge-sale');
    }else{
        return redirect()->back()->with('error', ['your message,here']);   
    }     
    }
}
