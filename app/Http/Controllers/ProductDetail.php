<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetail extends Controller
{
    public function index(Product $product)
    {
        return \view('product-detail',\compact('product'));
    }
}
