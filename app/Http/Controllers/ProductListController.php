<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;


class ProductListController extends Controller
{
    public function index()
    {
        $product_new = Product::select('id','name','image','price')->orderBy('id','DESC')->limit(10)->get();
        $product = Product::select('id','name','price','image','cate_id','size_id','status')->where('status','=',1)->with('category')->paginate(9);
        $pageTitle = 'Danh mục sản phẩm';
        $category = Category::all();
        $size = Size::all();
            return \view('product-list',[
            'product' => $product,
            'product_new'=> $product_new,
            'pageTitle' => $pageTitle,
            'category' => $category,
            'size' => $size
        ]);
    }
    public function sortByCate(Category $category)
    {
        $product_new = Product::select('id','name','image','price')->orderBy('id','DESC')->limit(10)->get();
        $product = Product::select('id','name','price','image','cate_id','size_id','status')->where('status','=',1)->where('cate_id','=',$category->id)->with('category')->paginate(9);
        $pageTitle = 'Danh mục: '.$category->name;
        $category = Category::all();
        $size = Size::all();
            return \view('product-list',[
            'product' => $product,
            'product_new'=> $product_new,
            'pageTitle' => $pageTitle,
            'category' => $category,
            'size' => $size
        ]);
    }
    public function sortBySize(Size $size)
    {
        $product_new = Product::select('id','name','image','price')->orderBy('id','DESC')->limit(10)->get();
        $product = Product::select('id','name','price','image','cate_id','size_id','status')->where('status','=',1)->where('size_id',$size->id)->paginate(9);
        $pageTitle = 'Size: '.$size->size_name;
        $category = Category::all();
        $size = Size::all();
            return \view('product-list',[
            'product' => $product,
            'product_new'=> $product_new,
            'pageTitle' => $pageTitle,
            'category' => $category,
            'size' => $size
        ]);
    }
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
