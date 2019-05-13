<?php

namespace App\Http\Controllers;

use DB;
use App\Quotation;
use Illuminate\Http\Request;
use Carbon\Carbon;
use \App\Product;
use \App\Client;
use \App\Supplier;
use \App\Num_Phone;
use \App\Product_Sale;
use DateTime;
use Validator;

class HomeController extends Controller
{
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
        return redirect('/product');
    }
    public function Earning(Request $rqt){
        $validator = Validator::make($rqt->all(), [
            // Do not allow any shady characters
            'fromdate' => 'required|date_format:"Y-d-m"',
            'todate' => 'required|date_format:"Y-m-d"',
        ]);
      
        if ($validator->fails()) {
            dd("error");
            return redirect('/home')
            ->withInput()
            ->withErrors($validator);
        }
        $from_date = new DateTime($rqt->fromdate);
        $help = new DateTime($rqt->todate);
        $to_date = $help->modify('+1 day');
        $earnings = Product_Sale::whereBetween('created_at', [$from_date, $to_date])->with('products')->get();
        return redirect('/home')->with('earnings', $earnings);

    }
}
