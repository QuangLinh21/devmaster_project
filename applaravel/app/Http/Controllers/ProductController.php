<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list_product()
    {
        $data=ProductModel::paginate(10);
        return view('Admins.category.list-product',compact('data',$data));
    }
}
