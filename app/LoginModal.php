<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoginModal extends Model
{
     protected $fillable = [
        'uname','email', 'pass',
    ];
}
