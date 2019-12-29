<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $primaryKey='item_id';
    protected $fillable = [
     'item_name',
     'item_qty',
     'item_price',
     'item_img',
    ];
}
