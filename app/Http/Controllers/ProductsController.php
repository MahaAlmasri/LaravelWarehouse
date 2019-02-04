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


public function edit(product $product )
{


    return view('edit', compact('product'));
}

public function update(product $product)
{
    $product->update(request(['name' , 'price' , 'description' , 'amount']));
    return redirect('/Products');
}

public function destroy(product $product)
{
    $product->delete();
    return redirect('/Products');
}

public function show(product $product)
{


    return view('show', compact('product'));
}

public function store()
{
    //validation for controls
    request()->validate([
    'name' => ['required', 'min:3'],
    'price' => 'required',
    'description' => 'required',
    'amount' => 'required'
    ]);
     product::create(request(['name' , 'price' , 'description' , 'amount']));
     return redirect('/Products');
}
}
