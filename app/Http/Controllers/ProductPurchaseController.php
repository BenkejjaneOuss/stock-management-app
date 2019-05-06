<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Product_Purchase;
use  \App\Product;
use  \App\Category;
use  \App\Supplier;

class ProductPurchaseController extends Controller
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

        $products_purchase = Product_Purchase::with('products')->with('suppliers')->get(); 
        $products = Product::where('archive', 0)->get();
        $categorys = Category::where('archive', 0)->get();
        $suppliers = Supplier::where('archive', 0)->get();
        return view('product_purchase',compact('products_purchase','products','categorys','suppliers'));
    }
    
    public function addProduct(Request $request){
        $product = new Product();
        $product->ref = $request->ref;
        $product->designation = $request->designation;
        $product->qte_alert = $request->qte_alert;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('/product-purchase');      
    }

    public function addProductPurchase(Request $request){
        $product_purchase = new Product_Purchase();
        $product_purchase->qte = $request->qte;
        $product_purchase->purchasing_price = $request->purchasing_price;
        $product_purchase->product_id = $request->product_id;
        $product_purchase->supplier_id = $request->supplier_id;
        $product_purchase->save();

        $product = Product::find($request->product_id);
        $product->qte = $product->qte + $request->qte;
        $product->total_price += $request->qte * $request->purchasing_price;
        $product->purchasing_price = $request->purchasing_price;

        $product->save();
        return redirect('/product-purchase');      
    }

}
