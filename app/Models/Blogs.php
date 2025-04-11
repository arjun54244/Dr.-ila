<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'image',
        'image_alt_tag',
        'description',
        'slug',
        'meta_title',
        'meta_desc',
        'tags',
        'status',
    ];
    protected $casts = [
        'tags' => 'array'
    ];
}
