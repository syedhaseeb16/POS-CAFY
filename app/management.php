<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class management extends Model
{
    protected $primaryKey='mem_id';
    protected $fillable = [
     'mem_name',
     'position',
     'age',
     'salary',
    ];
}
