
@extends('layout')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>
    
    <div class="container">
    <h2>Register User</h2>
    <div class="col-sm-8">
    <form method="POST" action="register">
    @CSRF
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" placeholder="Enter password" name="password">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Enter email" name="email">
  </div>
  <div class="form-group">
    <label for="contact">Contact:</label>
    <input type="tel" class="form-control" placeholder="Enter contact" name="contact">
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
  <button type="submit" class="btn btn-primary">Register</button>
</form>
    </div>
    </div>
</body>
</html>

@stop