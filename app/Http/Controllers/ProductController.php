<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;
use \App\Category;
use \App\Supplier;
class ProductController extends Controller
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
        $products = Product::where('archive', 0)->with('category')->orderBy('created_at', 'desc')->get(); 
        $categories = Category::where('archive', 0)->get();
        return view('product_list',compact('products','categories'));
    }

    public function addProduct(Request $request){
        $result = false;

        $product = new Product();
        $product->ref = $request->ref;
        $product->designation = $request->designation;
        $product->qte_alert = $request->qte_alert;
        $product->category_id = $request->category_id;
        
        if($product->save()){
            $result = true;
            $newProduct = Product::where('id', $product->id)->with('category')->first(); 

        }

        return Response()->json(compact('result','newProduct')); 
    }
    public function addCategoryInProduct(Request $request){
        $category = new Category();
        $category->name = $request->name;
        
        $category->save();
        return redirect('/product');      
    }

    public function deleteProduct($id){

        $result = false;
        $product = Product::find($id);
        $product->archive = 1;

        if($product->save()){
            $result = true;
        }
        
        
        return Response()->json(compact('result'));
        }

    public function updateProduct(Request $request){
        
        $result = false;

        $product = Product::find($request->id);
        $product->ref = $request->ref;
        $product->designation = $request->designation;
        $product->qte_alert = $request->qte_alert;
        $product->category_id = $request->category_id;
        
        if($product->save()){
            $result = true;
            $products = Product::where('archive', 0)->with('category')->orderBy('created_at', 'desc')->get(); 
        }

        return Response()->json(compact('result','products'));
    }
    
}
