@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-primary" href="{{ url('/category/create') }}">Add Category</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($category as $categories)
    <tr>
      <th scope="row">{{ $categories->id }}</th>
      <td>{{ $categories->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection
