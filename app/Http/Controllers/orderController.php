<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\order;

class orderController extends Controller
{


public function index()
{
    $orders=order::all();


    return view('/Orders/orders', compact('orders'));
}

public function create()
{

    return view('/Orders/create');
}


public function edit(order $order )
{


    return view('/Orders/edit', compact('order'));
}

public function update(order $order)
{
    $order->update( {{ Auth::user()->id}} );
    return redirect('/Orders/orders');
}

public function destroy(order $order)
{
    $order->delete();
    return redirect('/Orders/orders');
}

public function show(order $order)
{


    return view('/Orders/show', compact('order'));
}

public function store()
{
    //validation for controls
    request()->validate([
    'user_id' => 'required'
    ]);
     order::create( {{ Auth::user()->id }} );
     return redirect('/Orders/orders');
}
   }
