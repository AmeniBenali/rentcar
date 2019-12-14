@extends('layout')
@section('content')

<div class="container">
<h2>Show car id : {{$car->id}} </h2>
<h2>Show car name : {{$car->name}} </h2>
<h2>Show car color : {{$car->color}} </h2>
<h2>Show car company : {{$car->company}} </h2>

@endsection