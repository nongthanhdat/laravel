<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{

    public function index()
    {
        $arr['categories'] = Category::all();
        return view('admin.Category.index')->with($arr);

    }

    public function create()
    {
        return view('admin.Category.create');
    }

    public function store(Request $request, Category $category)
    {
        $category->name = $request->namecategory;
        $category->save();
        return redirect()->route('list-category');
    }
}
