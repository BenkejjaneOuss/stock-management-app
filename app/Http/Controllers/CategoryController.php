<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  \App\Category;
class CategoryController extends Controller
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
        $categories = Category::where('archive', 0)->get(); 
        return view('category',compact('categories'));
    }
    public function addCategory(Request $request){
        $category = new Category();
        $category->name = $request->name;
        
        $category->save();
        return redirect('/category');      
    }
    

    public function deleteCategory($id){
        $category = Category::find($id);
        $category->archive = 1;

        $category->save();
    }

    public function updateCategoryName(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;

        $category->save();
    }
}
