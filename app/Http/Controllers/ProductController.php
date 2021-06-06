<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Imports\ProductImport;
class ProductController extends Controller
{
    public function index()
    {
    	return view('product.index');
    }
    public function import(Request $request)
    {
    	\Excel::import(new ProductImport,$request->select_file);

        \Session::put('success', 'Your file is imported successfully in database.');
           
        return back();
    }
}
