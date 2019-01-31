@extends('layout')

@section('content')

<h1> Products </h1>
<ul>
    @foreach ($products as $product)

   <h4> <li>
    <a href="/{{ $product->id }}">
         {{$product->name}}  </a> </li> </h4> <br>
    @endforeach
    </ul>
    <a href="/create"> Add a Product </a>
@endsection
