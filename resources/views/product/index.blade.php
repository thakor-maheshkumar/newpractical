@extends('layouts.app')

@section('content')
<div class="container">
   <h3 align="center">Import Excel File in Laravel</h3>
    <br />
    <form method="post" enctype="multipart/form-data" action="{{ url('/product/import') }}">
    {{ csrf_field() }}
    <div class="form-group">
     <table class="table">
      <tr>
       <td width="40%" align="right"><label>Select File for Upload</label></td>
       <td width="30">
        <input type="file" name="select_file" />
       </td>
       <td width="30%" align="left">
         <button class="btn btn-primary">Import File</button>
       </td>
      </tr>
      <tr>
       <td width="40%" align="right"></td>
       <td width="30"><span class="text-muted">.xls, .xslx</span></td>
       <td width="30%" align="left"></td>
      </tr>
     </table>
    </div>
   </form>
@endsection


https://www.laravelcode.com/post/laravel-8-excel-and-csv-import-export-to-database-using-maatwebsite-excel-with-example

https://www.webslesson.info/2019/02/import-excel-file-in-laravel.html