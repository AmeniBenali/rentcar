@extends('layout')
@section('content')

<h1> Create CAR !!!! </h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form  class="form-horizontal" method="post" action="CreateCarStore" >
  @csrf
  <div class="form-group">

    <label for="name">name </label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Enter name">
  </div>

    <div class="form-group">
    <label for="color">color </label>
    <input type="text" id="color"  name="color"class="form-control" placeholder="Enter color">
  </div>

      <div class="form-group">
    <label for="company">company </label>
    <input type="text" id="company" name="company"class="form-control" placeholder="Enter company">
  </div>
  
  <button type="submit">Submit</button>
</form>


@endsection