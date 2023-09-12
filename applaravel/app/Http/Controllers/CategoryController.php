<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list_category(){
        return view('Admins.category.list-category');
    }
    public function list_product(){
        return view('Admins.category.list-product');
    }
    public function new(){
        return view('Admins.new.new');
    }
}
