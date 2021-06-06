<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([

            'product_name'     => $row[0],
            'product_price'    => $row[1], 
            'product_description'=> $row[2], 
          
            //
        ]);
    }
}
