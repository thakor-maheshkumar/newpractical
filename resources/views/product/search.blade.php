@extends('layouts.app')
@section('content')
<div class="container">
 <h3 align="center">Upload Excel File</h3>
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
<form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" method="post" action="{{url('search')}}">
  @csrf
  <div class="input-group">
    <input class="form-control" type="text" name="product" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
    <div class="input-group-append">
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
  </div>
</form>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Product Name</th>
      <th>Product Description</th>
      <th>Unique Code</th>
      <th>Category Name</th>
    </tr>
  </thead>
  <tbody>
    @if($product->count() > 0)
    @foreach($product as $products)
    <tr>
      <th scope="row">{{ $products->id }}</th>
      <td>{{ $products->name }}</td>
      <td>{{ $products->description }}</td>
      <td>{{ $products->unique_code }}</td>
      <td>{{$products->category->name }}</td>
    </tr>
    @endforeach
    @else
    <th>
      <td>No search result found</td>
    </th>
    @endif
  </tbody>

</table>
</div>

@endsection


