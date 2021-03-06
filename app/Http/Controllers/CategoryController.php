<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;//import Database Library 
use App\Models\Category;//import category model

class CategoryController extends Controller
{
    public function __contruct(){
        $this->middleware('auth');
    }
    
    public function index(){
        return view ('addCategory');
    }
    public function add(){
        $r=request();//received the data by GET or POST method $_POST['name']
        $addCategory=Category::create([
            'name'=>$r->categoryName,
        ]);
        Session::flash('success',"Category create successfully!");
        Return view('addCategory');
    }
    public function view(){
        $viewCategory=Category::all();//
        return view ('showCategory')->with('categories',$viewCategory);
    }
}
