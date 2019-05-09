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
        $categories = Category::where('archive', 0)->orderBy('created_at', 'desc')->get(); 
        return view('category',compact('categories'));
    }
    public function addCategory(Request $request){

        $result = false;

        $category = new Category();
        $category->name = $request->name;
        
        if($category->save()){
            $result = true;
        }

        return Response()->json(compact('result','category'));     
    }
    

    public function deleteCategory($id){
        $result = false;
        $category = Category::find($id);
        $category->archive = 1;

        if($category->save()){
            $result = true;
        }
        
        
        return Response()->json(compact('result'));
    }

    public function updateCategory(Request $request){

        $result = false;

        $category = Category::find($request->id);
        $category->name = $request->name;
        
        if($category->save()){
            $result = true;
        }

        return Response()->json(compact('result'));   
    }
}
