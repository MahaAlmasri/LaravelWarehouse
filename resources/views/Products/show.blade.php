@extends('layout')

@section('content')
<h1 class="title">{{$product->name}}</h1>
<div class="content">
        {{$product->price}} <br>
        {{$product->amount}} <br>
    {{$product->description}}
</div>

<p>
<a href="/Products/{{ $product->id }}/edit"> Edit </a>
</p>

@endsection
