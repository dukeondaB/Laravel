<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $cate = Category::select('id','name')->get();
        return \view('admin.category.index',\compact('cate'));
    }
}
