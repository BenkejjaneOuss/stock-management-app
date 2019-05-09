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
        $clients = Client::where('archive', 0)->orderBy('created_at', 'desc')->get(); 
        return view('client',compact('clients'));
    }

    public function addClient(Request $request){

        $result = false;

        $client = new Client();
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        
        if($client->save()){
            $result = true;
        }

        return Response()->json(compact('result','client'));          
    }

    public function deleteClient($id){

        $result = false;
        $client = Client::find($id);
        $client->archive = 1;

        if($client->save()){
            $result = true;
        }
        
        
        return Response()->json(compact('result'));
    }

    public function updateClient(Request $request){

        $result = false;

        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        
        if($client->save()){
            $result = true;
        }

        return Response()->json(compact('result'));   
    }

}
