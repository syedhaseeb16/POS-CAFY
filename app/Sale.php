<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   	protected $primaryKey='order_no';
    protected $fillable = [
     'amount',
     'discount',
     'total_amount',
    ];
}
