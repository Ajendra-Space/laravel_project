@extends('layout')

@section('additional-content')



<div class="container">
<div class="col-sm-6">
<h1>User login</h1>

<form method="POST" action="login">
    @CSRF
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="address">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <button type="submit" class="btn btn-primary">login</button>
</form>
</div>
</div>
@stop




