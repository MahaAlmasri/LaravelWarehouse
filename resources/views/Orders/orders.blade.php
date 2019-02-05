@extends('layout')

@section('content')

<h1> Orders </h1>
<ul>
    @foreach ($orders as $order)

   <h4> <li>
    <a href="/{{ $order->id }}">
         {{$order->name}}  </a> </li> </h4> <br>
    @endforeach
    </ul>
    <a href="/Orders/create"> Add an Order </a>
@endsection
