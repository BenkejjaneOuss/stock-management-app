<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Recharge_Purchase;
use  \App\Num_Phone;
use  \App\Operator;

class RechargePurchaseController extends Controller
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

        $recharges_purchase = Recharge_Purchase::with('num_phones')->get(); 
        $num_phones = Num_Phone::where('archive', 0)->with('operators')->get();
        return view('recharge_purchase',compact('recharges_purchase','num_phones'));
    }

    public function addRechargePurchase(Request $request){
        $recharge_purchase = new Recharge_Purchase();
        $recharge_purchase->montant = $request->montant;
        $recharge_purchase->num_phone_id = $request->num_phone_id;
        $recharge_purchase->save();

        $num_phone = Num_Phone::find($request->num_phone_id);
        $num_phone->solde = $num_phone->solde + $request->montant;

        $num_phone->save();
        return redirect('/recharge-purchase');      
    }


}
