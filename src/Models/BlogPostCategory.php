<?php

namespace Epmnzava\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostCategory extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function posts()
    {

        return $this->hasMany(BlogPost::class, 'postcatid');
    }
}
