<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    protected $fillable = [
        'image',
        'title_en',
        'title_ru',
        'description_en',
        'description_ru'

    ];
}
