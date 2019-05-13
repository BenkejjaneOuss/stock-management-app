<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Product_Sale;
use  \App\Product;
use  \App\Category;
use  \App\Supplier;
use  \App\Client;
use DB;

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
        $products_sale = Product_Sale::with(['product' => function($query) {
                                                $query->with('category');
                                            }])
                                            ->with('client')
                                            ->orderBy('created_at', 'desc')
                                            ->get(); 
        $products = Product::where('archive', 0)->get();
        $clients = Client::where('archive', 0)->get();
        return view('product_sale',compact('products_sale','products','clients'));
    }
    

    public function addProductSale(Request $request){

        $result = false;
        DB::beginTransaction();

        try{
            $product_sale = new Product_Sale();
            $product_sale->qte = $request->qte;
            $product_sale->product_id = $request->product_id;
            $product_sale->selling_price = $request->selling_price;
            $product_sale->client_id = $request->client_id;
            $product_sale->save();

            $product = Product::find($request->product_id);
            $product->qte = $product->qte - $request->qte;
            $product->total_price -= $request->selling_price * $request->qte;
            $product->save();
        
            if($product->save()){
                $result = true;
                $newProductSale = Product_Sale::where('id', $product_sale->id)
                                                ->with(['product' => function($query) {
                                                    $query->with('category');
                                                }])
                                                ->with('client')
                                                ->first(); 
            }
        } catch (ValidationException $e) {

            // ROllback and then redirect
            // Back with error
            DB::rollback();

        } catch (\Exception $e) {

            DB::rollback();
            throw $e;
        }   

    // COMMIT THE QUERIES (POURCENT AND POSTULER)
        DB::commit();

        return Response()->json(compact('result','newProductSale')); 
        
    }

}
