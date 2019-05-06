<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Product_Sale;
use  \App\Product;
use  \App\Category;
use  \App\Supplier;
use  \App\Client;

class ProductSaleController extends Controller
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

        $products_sale = Product_Sale::with('products')->with('clients')->get(); 
        $products = Product::where('archive', 0)->get();
        $categorys = Category::where('archive', 0)->get();
        $suppliers = Supplier::where('archive', 0)->get();
        $clients = Client::where('archive', 0)->get();
        return view('product_sale',compact('products_sale','products','categorys','suppliers','clients'));
    }
    
    public function addProduct(Request $request){
        $product = new Product();
        $product->ref = $request->ref;
        $product->designation = $request->designation;
        $product->qte_alert = $request->qte_alert;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('/product-sale');      
    }

    public function addProductSale(Request $request){
        $product = Product::find($request->product_id);
        if($request->qte <= $product->qte){
            $product_sale = new Product_Sale();
            $product_sale->qte = $request->qte;
            $product_sale->product_id = $request->product_id;
            $product_sale->selling_price = $request->selling_price;
            $product_sale->client_id = $request->client_id;
            $product_sale->save();
    
            $product->qte = $product->qte - $request->qte;
            $product->total_price -= $request->selling_price * $request->qte;
            $product->save();
            return redirect('/product-sale');  
        }else{
            return redirect()->back()->with('error', ['your message,here']);   
        }
    }

}
