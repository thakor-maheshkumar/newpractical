<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $data['category']=Category::all();
        return view('category.index',$data);
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(CategoryRequest $request)
    {
        $category=new Category;
        $category->name=$request->name;
        $category->save();
        return redirect('/category/index');
    }
}
