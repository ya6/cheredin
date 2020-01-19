<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePhoto extends Model
{
    protected $fillable = [
        'image',
        
        'description_en',
        'description_ru'

    ];
}
