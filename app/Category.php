<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        
        'category_en',
        'category_ru'

    ];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
