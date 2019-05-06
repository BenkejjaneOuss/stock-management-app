<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use \App\User;

class MyProfileController extends Controller
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
        return view('myprofile');
    }

    public function updatePassword(request $request){
        $user = User::where('email',$request->email)->first();
        /*$user->password = Hash::make($request->password);*/
        $user->save();
    }

}
