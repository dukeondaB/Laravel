<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::select('id','name','price','image','description','status','cate_id','size_id','view')->paginate(8);
        return \view('admin.product.index', \compact('product'));
    }
    public function create()
    {
        $size = Size::select('id','size_name')->get();
        $category = Category::select('id','name')->get();
        return \view('admin.product.create',[
            'size'=>$size,
            'category'=>$category
        ]);

    }

    public function store(Request $request)
    {
        // $data = $request->all();
        // $validateData = $request->validate();
        $product = new Product;
        $product->fill($request->all());
        // \dd($request->image_list);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->size_id = $request->size_id;
        $product->cate_id = $request->cate_id;
        $product->status = $request->status == true ? '1': '0';
        // $product->image = $request->image;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/products', $filename);
            $product->image= $filename;
        }
        // Products::create($data);
        $array_list = [];
        if($image_list = $request->file('image_list'))
        {
            foreach($image_list as $multiFile){
                $name_list = \date('YmHi').$multiFile->getClientOriginalName();
                $product->image_list = $multiFile->storeAs('images/products', $name_list);
                $array_list[] = $name_list;
            };
            $product->image_list = implode('|',$array_list);
        }
        $product->save();
        return \redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return \redirect()->route('products.index');
        //  có thể sử dụng model::destroy($student);

    }
    public function edit(Product $product)
    {
        $size = Size::select('id','size_name')->get();
        $category = Category::select('id','name')->get();
        return \view('admin.product.edit',[
            'product' => $product,
            'size' => $size,
            'category' => $category
        ]);
    }
    public function update(ProductRequest $request, $product)
    {

        $product = Product::find($product);
        $product->fill($request->all());
        $product->status = $request->status == true ? '1': '0';
        // $product->image = $request->image;
        if($request->hasFile('image')){
            $path = 'images/products/'. $product->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> storeAs('images/products', $filename);
            $product->image= $filename;
        }
        $array_list = [];
        if($image_list = $request->file('image_list'))
        {
            foreach($image_list as $multiFile){
                $name_list = \date('YmHi').$multiFile->getClientOriginalName();
                $product->image_list = $multiFile->storeAs('images/products', $name_list);
                $array_list[] = $name_list;
            };
            $product->image_list = implode('|',$array_list);
        }
        $product->update();
        // $data = $request->all();

        // $student->update($data);
        // nếu ở đây dùng update($data) thì vẫn cần @method(PUT) ở form
        return \redirect()->route('products.index');
    }
    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $products = Product::where('name', 'LIKE', '%' . $request->name . '%')->get();

            if ($products) {
                foreach ($products as $key => $item) {
                    $output .= '<tr>
                    <td>' . $item->id . '</td>
                    <td>' . $item->name . '</td>
                    <td>' . $item->price . '</td>
                    <td>' . $item->description . '</td>
                    <td>' . $item->status . '</td>
                    <td><img id="product-img" src="'.url('Image/'.$item->image) .'" width="200px" alt=""></td>
                    </tr>';
                }
            }

            return Response($output);
            // return \view('admin.product.index');
        }
    }
}
