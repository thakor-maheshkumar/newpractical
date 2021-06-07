<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\Imports\ProductImport;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
        $data['product']=Product::with('category')->get();
    	return view('product.index',$data);
    }
    public function import(Request $request)
    {
        $this->validate($request, [
          'select_file'  => 'required|mimes:xls,xlsx'
         ]);
    	\Excel::import(new ProductImport,$request->select_file);
        return redirect('product/index');
    }
    public function search(Request $request)
    {
        $productSearch=$request->input('product');
        $products = Product::query();
        if($productSearch){
            $products = $products->where('name','LIKE','%'.$productSearch.'%')
                                ->orWhereHas('category', function( $query ) use ( $productSearch ){
                                    $query->where('name','LIKE','%'.$productSearch.'%');
                                });
        }
        $data['product']=  $products->with('category')->get();
        return view('product.search',$data);
    }
}
