@extends('layouts.app')

@section('content')
<div class="container">
   <form method="post" action="{{ url('/category/store') }}">
    @csrf
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
    <label for="exampleInputEmail1">Category</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Category">
    @if($errors->has('name'))
        <div class="error">{{ $errors->first('name') }}</div>
    @endif
  </div>
    </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
