<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name',
        'editor',
        'writer',
        'description',
        'price',
        'photo',
        'page',
        '+18',
        'created_at',
        'updated_at',
    ];
}
