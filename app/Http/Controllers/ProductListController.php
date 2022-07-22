<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $product = Product::select('id','name','price','image','status')->where('status','=',1)->get();
        // \dd($product);
        return \view('product-list',\compact('product'));
    }
    public function SortType()
    {
        # code...
    }
}
