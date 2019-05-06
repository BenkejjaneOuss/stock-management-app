<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Client;

class ClientController extends Controller
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
        $clients = Client::where('archive', 0)->get(); 
        return view('client',compact('clients'));
    }

    public function addClient(Request $request){
        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        
        $client->save();
        return redirect('/client');      
    }

    public function deleteClient($id){
        $client = Client::find($id);
        $client->archive = 1;

        $client->save();
    }

    public function updateClientName(Request $request){
        $client = Client::find($request->id);
        $client->name = $request->name;

        $client->save();
    }

    public function updateClientEmail(Request $request){
        $client = Client::find($request->id);
        $client->email = $request->email;

        $client->save();
    }
    public function updateClientPhone(Request $request){
        $client = Client::find($request->id);
        $client->phone = $request->phone;

        $client->save();
    }
    public function updateClientAddress(Request $request){
        $client = Client::find($request->id);
        $client->address = $request->address;

        $client->save();
    }
}
