<?php

namespace Epmnzava\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPostMedia extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function post()
    {

        return $this->belongsTo(BlogPost::class, 'postid');
    }
}
