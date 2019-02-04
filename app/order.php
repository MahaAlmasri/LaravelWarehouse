<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    //order has details
    public function orderDetails()
    {
        return $this->hasMany(orderDetails::class);

    }


}
