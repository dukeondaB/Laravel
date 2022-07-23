<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $product = Product::select('id','name','price','image','cate_id','status')->where('status','=',1)->with('category')->get();
        // \dd($product);
        return \view('product-list',\compact('product'));
    }
    // public function SortType(Product $category)
    // {

    //     $product = Product::select('id','name','price','image','cate_id','status')->where('status','=',1)->with('category')->get();
    //     // \dd($product);
    //     return \view('product-list',\compact('product'));
    // }
    public function addToCart(Product $product)
    {
        $cart = \session()->get('cart',[]);
        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }
}
