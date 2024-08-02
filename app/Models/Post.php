<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'meta_description',
        'meta_keywords',
        'slug',
    ];
}
