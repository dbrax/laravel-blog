<?php

namespace Epmnzava\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BlogPost extends Model
{

    use HasTranslations;

    protected $guarded = [];
    protected $table = 'blog_posts';

    public $translatable = ['title', 'content', 'caption'];
    public function media()
    {
        return $this->hasMany(PostMedia::class, "postid");
    }
}
