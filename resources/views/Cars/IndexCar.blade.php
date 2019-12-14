@extends('layout')
@section('content')

<div class="container">
<h2>index car</h2>
<a href="/CreateCar" class="btn btn-outline-success">Add Car</a>
<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>color</th>
      <th>company</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
@foreach($cars as $car)

<tr>
      <th scope="row">{{$car->id}}</th>
      <td><a href="/ShowCar/{{$car->id}}">{{$car->name}}</a></td>
      <td>{{$car->color}}</td>
      <td>{{$car->company}}</td>
      <td><a href="editCar/{{$car->id}}" class="btn btn-outline-info">Update</a></td>
      <td><a href="destroy/{{$car->id}}" class="btn btn-outline-danger">Delete</a></td>
    </tr>
@endforeach
</tbody>
</table>
</div>
@endsection
