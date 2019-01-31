@extends('layout')

@section('content')
<h1> Add a New Product </h1>

<form method="POST" action="/Products">
    {{ csrf_field() }}
    <div>
        <input type="text" name="name" placeholder="product name....." >
    </div><br>
    <div>
        <textarea name="description" placeholder="description.....">
         </textarea>
    </div><br>
    <div>
        <input type="text" name="price" placeholder="price.....">
    </div><br>
    <div>
            <input type="text" name="amount" placeholder="amount.....">
        </div><br>
        <div>
            <button type="submit" > Create a new Project </button>
        </div>

</form>

@endsection
