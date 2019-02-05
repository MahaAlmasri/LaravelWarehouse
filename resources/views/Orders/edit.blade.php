@extends('layout')


@section('content')
<h1 class="title">Edit Order</h1>

<form method="POST" action="/Orders/{{ $order->id }}">
@method('PATCH')
@csrf


    <div class="field">
        <label class="label" for="name"> order Name </label>
        <div class="control">
        <input type="text" name="name"  value="{{$order->name}}">
    </div></div><br>
    <div class="field">
            <label class="label" for="description"> Description </label>
            <div class="control">
        <textarea class="textarea" name="description"  >{{$order->description}}
         </textarea>
        </div>
    </div><br>
    <div class="field">
            <label class="label" for="price"> Price </label>
            <div class="control">
        <input type="text" name="price"  value="{{$order->price}}">
    </div></div><br>
    <div class="field">
            <label class="label" for="amount"> Amount </label>
            <div class="control">
            <input type="text" name="amount"  value="{{$order->amount}}">
        </div></div><br>
        <div class="field">
        <div class="control">
            <button type="submit" class="button"> Update a order </button>
        </div></div><br>

</form>

<form method="POST" action="/{{$order->id}}">
        @method('DELETE')
        @csrf

        <div class="field">
                <div class="control">
                    <button type="delete" class="button"> Delete a order </button>
                </div></div>

</form>


@endsection
