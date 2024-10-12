@extends('layout')

@section('additional-content')



<div class="container">
<div class="col-sm-6">
<h1>Restaurant Edit Record</h1>

<form method="POST" action="edit">
    @CSRF
  <div class="form-group">

  <input type="hidden" class="form-control" value="{{$data->id}}" name="id">
  
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" value="{{$data->name}}" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" value="{{$data->email}}" name="email">
  </div>
  Gender:
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender"  value="{{$data->option1}}" checked>
  <label class="form-check-label" for="exampleRadios1">
  Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="{{$data->option2}}" >
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="{{$data->option3}}">
  <label class="form-check-label" for="exampleRadios2">
    Other
  </label>
</div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" placeholder="Enter address" value="{{$data->address}}" name="address">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
@stop




