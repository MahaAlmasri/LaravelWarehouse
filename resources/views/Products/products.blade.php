@extends('layout')

@section('content')

<h2> Products </h2><br>
<h4><ul>
    @foreach ($products as $product)

    <li>
    <a href="/Products/{{ $product->id }}">
         {{$product->name}}  </a> </li>  <br>
    @endforeach
    </ul>
    <a href="/Products/create"> Add a Product </a></h4>
@endsection
