<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'image',
        'name',
        'email',
        'site',
        'comment'

    ];
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
