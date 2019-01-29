<!DOCTYPE html>
<html>
    <head>
        <title> Create a New Product </title>
    </head>
<body>
<h1> Create a New Product </h1>

<form method="POST" action="/Products">
    {{ csrf_field() }}
    <div>
        <input type="text" name="name" placeholder="product name....." >
    </div>
    <div>
        <textarea name="description" placeholder="description.....">
         </textarea>
    </div>
    <div>
        <input type="text" name="price" placeholder="price.....">
    </div>
    <div>
            <input type="text" name="amount" placeholder="amount.....">
        </div>
        <div>
            <button type="submit" > Create a new Project </button>
        </div>

</form>

</body>
</html>
