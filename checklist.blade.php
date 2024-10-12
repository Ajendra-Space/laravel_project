@extends('layout')

@section('additional-content')

<div class="container">
<h1>Restaurant List</h1>
@if(Session::get('status'));
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Great! Successfully Create your Account</p>
</div>
@endif
@if(Session::get('delete'));
<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Delete!</h4>
  <p>Great! Successfully Delete your Account</p>
</div>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Address</th>
      <th scope="col">Operations</th>

    </tr>
  </thead>
  <tbody>
  @foreach ($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->address}}</td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a>
      <a href="edit/{{$item->id}}"><i class="fa fa-edit"></i></a></td>  
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop




