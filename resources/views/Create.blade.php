@extends('layout')

@section('content')
<h1> Add a New Product </h1>

<form method="POST" action="/Products">
    {{ csrf_field() }}
    <div>
    <input type="text" name="name" class="{{ $errors->has('name')? 'danger': ''}}" value="{{old('name')}}" placeholder="product name....." >
    </div><br>
    <div>
        <textarea name="description" class="{{ $errors->has('description')? 'danger': ''}}"  placeholder="description.....">
                {{old('description')}} </textarea>
    </div><br>
    <div>
        <input type="text" name="price" class="{{ $errors->has('price')? 'danger': ''}}" value="{{old('price')}}" placeholder="price.....">
    </div><br>
    <div>
            <input type="text" name="amount" class="{{ $errors->has('amount')? 'danger': ''}}" value="{{old('amount')}}" placeholder="amount.....">
        </div><br>
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
