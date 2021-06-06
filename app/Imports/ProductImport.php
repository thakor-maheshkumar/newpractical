<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProductImport implements ToModel,WithValidation,WithHeadings
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name'         => $row[0],
            'description'  => $row[1],
            'unique_code'  =>$row[2],
            'category_id' =>$row[3]
        ]);
    }
    public function rules(): array
    {
        return [
            '0'=>'required',
            '1'=>'required',
            '2' => 'required|unique:products,unique_code',
            '3'=>'required'
        ];
    }
    public function customValidationMessages()
{
    return [
        '0.required'=>'Product name has required',
        '1.required'=>'Description has required',
        '2.unique' => 'Unique code has been already taken .',
        '2.required' => 'Unique code has been required .',
        '3.required'=>'Category Id has required'
    ];
}
    public function headings(): array
    {
        return [
            'Product Name',
            'Description',
            'Unique Code',
            'Category Id',
        ];
    }

}
