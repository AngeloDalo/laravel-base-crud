<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'name',
        'code',
        'editor',
        'writer',
        'description',
        'price',
        'photo',
        'page',
        'adult',
        'created_at',
        'updated_at',
    ];
}
