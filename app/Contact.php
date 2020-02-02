<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        
        'email',
        'phone',
        'address_en',
        'address_ru',

    ];
}
