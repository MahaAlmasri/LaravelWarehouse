@extends('layout')

@section('content')
<h1 class="title">Edit Product</h1>

<form method="POST" action="/{{$product->id}}">
@method('PATCH')
@csrf
    <div class="field">
        <label class="label" for="name"> Product Name </label>
        <div class="control">
        <input type="text" name="name"  value="{{$product->name}}">
    </div></div>
    <div class="field">
            <label class="label" for="description"> Description </label>
            <div class="control">
        <textarea class="textarea" name="description"  >{{$product->description}}
         </textarea>
        </div>
    </div>
    <div class="field">
            <label class="label" for="price"> Price </label>
            <div class="control">
        <input type="text" name="price"  value="{{$product->price}}">
    </div></div>
    <div class="field">
            <label class="label" for="amount"> Amount </label>
            <div class="control">
            <input type="text" name="amount"  value="{{$product->amount}}">
        </div></div>
        <div class="field">
        <div class="control">
            <button type="submit" class="button"> Update a Product </button>
        </div></div>

</form>

<form method="POST" action="/{{$product->id}}">
        @method('DELETE')
        @csrf

        <div class="field">
                <div class="control">
                    <button type="delete" class="button"> Delete a Product </button>
                </div></div>

</form>


@endsection
