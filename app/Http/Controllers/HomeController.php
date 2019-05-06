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
        $products = Product::where('archive', 0)->get();
        $productsCount = Product::where('archive', 0)->count();
        $clientsCount = Client::where('archive', 0)->count();
        $suppliersCount = Supplier::where('archive', 0)->count();
        $orangeCount = Num_Phone::where('archive', 0)->where('operator_id', 1)->get();
        $iamCount = Num_Phone::where('archive', 0)->where('operator_id', 2)->get();
        $inwiCount = Num_Phone::where('archive', 0)->where('operator_id', 3)->get();
        $now = Carbon::now();
        $productsSaleToday = Product_Sale::whereDate('created_at', Carbon::today())->with('products')->get();
        $productsSaleYesterday = Product_Sale::whereDate('created_at', Carbon::yesterday())->with('products')->get();
        $productsSaleWeek = Product_Sale::whereBetween('created_at', [Carbon::now()->startOfWeek(),Carbon::now()->endOfWeek()])->with('products')->get();
        $productsSaleMonth = Product_Sale::whereYear('created_at', $now->year)->whereMonth('created_at', $now->month)->with('products')->get();
        $productsAlert = Product::where('archive', 0)->whereColumn('qte', 'qte_alert')->with('categorys')->get();
        $productsAlert_count = $productsAlert->count();
        $productsTotalSales = Product_Sale::count();
        return view('home',compact('products','productsCount','clientsCount','suppliersCount','orangeCount','iamCount','inwiCount','productsSaleToday','productsSaleYesterday','productsSaleWeek','productsSaleMonth','productsAlert','productsAlert_count','productsTotalSales'));
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
