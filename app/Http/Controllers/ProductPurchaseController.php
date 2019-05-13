<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Product_Purchase;
use  \App\Product;
use  \App\Category;
use  \App\Supplier;
use DB;
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

        $products_purchase = Product_Purchase::with(['product' => function($query) {
                                                    $query->with('category');
                                                }])
                                                ->with('supplier')
                                                ->orderBy('created_at', 'desc')
                                                ->get(); 
        $products = Product::where('archive', 0)->get();
        $suppliers = Supplier::where('archive', 0)->get();
        return view('product_purchase',compact('products_purchase','products','suppliers'));
    }

    public function addProductPurchase(Request $request){
        $msg = "test";
        $result = false;
        DB::beginTransaction();

        try{
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
        
            if($product->save()){
                $result = true;
                $newProductPurchase = Product_Purchase::where('id', $product_purchase->id)
                                                ->with(['product' => function($query) {
                                                    $query->with('category');
                                                }])
                                                ->with('supplier')
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

        return Response()->json(compact('msg','result','newProductPurchase')); 
    }

}
