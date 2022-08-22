<?php

namespace Epmnzava\Blog\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BlogPostCategory extends Model
{
    use HasFactory, HasTranslations;

    protected $guarded = [];
    public $translatable = ['name'];

    protected $table = "blog_post_categories";

    public function posts()
    {

        return $this->hasMany(BlogPost::class, 'postcatid');
    }
}
