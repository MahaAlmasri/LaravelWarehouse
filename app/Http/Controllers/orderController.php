<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

class orderController extends Controller
{


public function index()
{
    $orders=order::all();


    return view('orders', compact('orders'));
}

public function create()
{

    return view('createOrder');
}


public function edit(order $order )
{


    return view('edit', compact('order'));
}

public function update(order $order)
{
    $order->update(request(['user_id']));
    return redirect('/orders');
}

public function destroy(order $order)
{
    $order->delete();
    return redirect('/orders');
}

public function show(order $order)
{


    return view('show', compact('order'));
}

public function store()
{
    //validation for controls
    request()->validate([
    'user_id' => 'required'
    ]);
     order::create(request(['user_id']));
     return redirect('/orders');
}
   }
