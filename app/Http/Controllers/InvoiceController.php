<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use  \App\Product_Sale;
use  \App\Product;
use  \App\Category;
use  \App\Supplier;
use  \App\Client;
use  \App\Invoice;
use  \App\Product_Sale_Invoice;
class InvoiceController extends Controller
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
        $invoices = Invoice::with('clients')->get(); 
        $products = Product::where('archive', 0)->get();
        $categorys = Category::where('archive', 0)->get();
        $clients = Client::where('archive', 0)->get();
        return view('invoice_list',compact('invoices','products','clients','categorys'));
        //$pdf = PDF::loadView('invoice');
        //return $pdf->download('invoice.pdf');
    }

    public function addInvoice (Request $request){
        $count = count($request->input('product_id'));
        $invoice = new Invoice();
        $invoice->client_id = $request->client_id;
        $invoice->save();
        
        for($j = 0; $j < $count; $j++){
            
            //echo $request->product_id[$i]." ".$request->product_qte[$i]."<br>";
            
            $product = Product::find($request->product_id[$j]);
            if($request->product_qte[$j] <= $product->qte){

            }else{
                return redirect()->back()->with('error', ['your message,here']);   
            } 
        }

        for($i = 0; $i < $count; $i++){

            //echo $request->product_id[$i]." ".$request->product_qte[$i]."<br>";

            $product = Product::find($request->product_id[$i]);

                $product_sale_invoice = new Product_Sale_Invoice();
                $product_sale_invoice->qte = $request->product_qte[$i];
                $product_sale_invoice->selling_price = $request->product_selling_price[$i];
                $product_sale_invoice->product_id = $request->product_id[$i];
                $product_sale_invoice->invoice_id = $invoice->id;
                $product_sale_invoice->save();

                //$product->qte = $product->qte - $request->product_qte[$i];
                //$product->total_price -= $request->product_selling_price[$i] * $request->product_qte[$i];
                //$product->save();
        }
            $client = Client::where('id', $request->client_id)->first();
            $products_sale = Product_Sale_Invoice::where('invoice_id', $invoice->id)->with('products')->get();
            //dd($products_sale);
            $products = Product::where('archive', 0)->get();

            //dd($client);
            $pdf = PDF::loadView('invoice', compact('client','invoice','products_sale','products'));
            $pdf->save('assets/invoices/invoice'.$invoice->id.'.pdf');

        return redirect('/invoice');  

        //dd($request->product[]);
        //foreach($request->product as $product){
        //   echo $product['id']."<br>";
        //}
    
    }
}

