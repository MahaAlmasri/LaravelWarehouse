@extends('layout')

@section('content')
<h3> Add a New Product </h3><br>

<form method="POST" action="/Products/products">
    {{ csrf_field() }}

    <div class="field">
    <label class="label" for="name"> Product Name </label>
    <div class="control">
    <input type="text" name="name" class="{{ $errors->has('name')? 'danger': ''}}" value="{{old('name')}}" placeholder="product name....." >
    </div></div><br>

    <div class="field">
        <label class="label" for="description"> Description </label>
        <div class="control">
        <textarea name="description" class="{{ $errors->has('description')? 'danger': ''}}"  placeholder="description.....">
                {{old('description')}} </textarea>
    </div></div><br>

    <div class="field">
        <label class="label" for="price"> Price </label>
        <div class="control">
        <input type="text" name="price" class="{{ $errors->has('price')? 'danger': ''}}" value="{{old('price')}}" placeholder="price.....">
    </div></div><br>
    <div class="field">
            <label class="label" for="amount"> Amount </label>
            <div class="control">
            <input type="text" name="amount" class="{{ $errors->has('amount')? 'danger': ''}}" value="{{old('amount')}}" placeholder="amount.....">
        </div></div><br>
        <div>
            <button type="submit" > Create a new Product </button>
        </div>
        <!-- div for display errors if is it exists  -->
    @if ($errors->any())
    <div class="danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</form>

@endsection
