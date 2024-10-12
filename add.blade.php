@extends('layout')

@section('additional-content')



<div class="container">
<div class="col-sm-6">
<h1>Restaurant Add New!</h1>

<form method="POST" action="add">
    @CSRF
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  Gender:
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" value="option3">
  <label class="form-check-label" for="exampleRadios2">
    Other
  </label>
</div>
  <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" placeholder="Enter address" name="address">
  </div>
  <button type="submit" class="btn btn-primary">Add User</button>
</form>
</div>
</div>
@stop




