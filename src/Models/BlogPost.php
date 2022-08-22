<?php

namespace Epmnzava\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class BlogPost extends Model
{

    use HasTranslations;

    protected $guarded = [];

    public $translatable = ['title', 'content'];
    public function media()
    {
        return $this->hasMany(PostMedia::class, "postid");
    }
}
