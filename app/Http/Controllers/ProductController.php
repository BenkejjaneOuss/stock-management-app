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
        $products = Product::where('archive', 0)->with('categorys')->get(); 
        $categorys = Category::where('archive', 0)->get();
        return view('product_list',compact('products','categorys'));
    }

    public function addProduct(Request $request){
        $product = new Product();
        $product->ref = $request->ref;
        $product->designation = $request->designation;
        $product->qte_alert = $request->qte_alert;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('/product');      
    }
    public function addCategoryInProduct(Request $request){
        $category = new Category();
        $category->name = $request->name;
        
        $category->save();
        return redirect('/product');      
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        $product->archive = 1;

        $product->save();
        }

    public function updateProductRef(Request $request){
        $product = Product::find($request->id);
        $product->ref = $request->ref;

        $product->save();
    }
    public function updateProductDesignation(Request $request){
        $product = Product::find($request->id);
        $product->designation = $request->designation;

        $product->save();
    }

    public function updateProductQteAlert(Request $request){
        $product = Product::find($request->id);
        $product->qte_alert = $request->qte_alert;

        $product->save();
    }


    public function updateProductCategory(Request $request){
        $product = Product::find($request->id);
        $product->category_id = $request->category_id;

        $product->save();
    }

}
