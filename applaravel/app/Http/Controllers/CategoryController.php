<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function list_category(Request $request)
    {
        $key = $request->search;
        $data=Category::where('name','like','%'.$key.'%')->paginate(5)->appends(['search'=>$key]); 
        return view('Admins.category.list-category',compact('data'));
    }
    public function list_product()
    {
        return view('Admins.category.list-product');
    }
    public function new()
    {
        return view('Admins.new.new');
    }
}
