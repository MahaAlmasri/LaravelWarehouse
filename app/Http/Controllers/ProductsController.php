<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductsController extends Controller
{

public function index()
{
    $products=product::all();


    return view('Products', compact('products'));
}

public function create()
{

    return view('Create');
}


public function edit($id)
{
    $product = product::findOrFail($id);

    return view('edit', compact('product'));
}

public function update($id)
{
    $product = product::findOrFail($id);
    $product->name=request('name');
    $product->description=request('description');
    $product->price=request('price');
    $product->amount=request('amount');
    $product->save();
    return redirect('/Products');
}

public function destroy($id)
{
    $product = product::findOrFail($id);
    $product->delete();
    return redirect('/Products');
}

public function show($id)
{
    $product = product::findOrFail($id);

    return view('show', compact('product'));
}

public function store()
{
    $product=new product();
$product->name=request('name');
$product->description=request('description');
$product->price=request('price');
$product->amount=request('amount');
$product->save();
return redirect('/Products');
}
}
