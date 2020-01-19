<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{protected $fillable = [
    'image',
    
    'description_en',
    'description_ru'

];
}
