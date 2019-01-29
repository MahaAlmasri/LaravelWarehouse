<!DOCTYPE html>
<html>
    <head>
        <title>
            Products
        </title>
    </head>
<body>
<ul>
    @foreach ($products as $product)

    <li>
    <a href="/{{$product->id}}">
         {{$product->name}} </li> </a>
    @endforeach
    </ul>
</body>
</html>
