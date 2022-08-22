<?php

namespace Epmnzava\Blog;

use Epmnzava\Blog\Models\BlogPostCategory;
use Epmnzava\Blog\Models\BlogPost;
use Epmnzava\Blog\Models\BlogPostMedia;

class Blog
{



    public function __construct()
    {
    }

    public function store($title, $content, $author, $media, $media_link = null,  $caption = null)
    {
        $post = BlogPost::create([
            "title" => $title,
            "content" => $content,
            "author" => $author,
            "date" => now()->format('Y-m-d')
        ]);

        $mime_type = "";

        $filename = "";
        if (!empty($media)) {
            $filename = time() . '.' . $media->extension();

            $mime_type = $media->getMimeType();

            $media->move(public_path('uploads'), $filename);
            $post_media = BlogPostMedia::create([

                "postid" => $post->id,
                "media" => "/uploads/" . $filename,
                "mime_type" => $mime_type,



            ]);
        }


        return $post;
    }


    public function update($postid, $title, $content, $author, $media, $media_link = null,  $caption = null)
    {
        $post = BlogPost::where('id', $postid)->first();
        $post = BlogPost::update([
            "title" => $title,
            "content" => $content,
            "author" => $author,
            "date" => now()->format('Y-m-d')
        ]);

        $mime_type = "";

        $filename = "";
        if (!empty($media)) {
            $filename = time() . '.' . $media->extension();

            $mime_type = $media->getMimeType();

            $media->move(public_path('uploads'), $filename);
            $post_media = BlogPostMedia::create([

                "postid" => $post->id,
                "media" => "/uploads/" . $filename,
                "mime_type" => $mime_type,



            ]);
        }


        return $post;
    }


    public function getAll()
    {
        return BlogPost::with('media')->simplepaginate(10);
    }

    public function getCategories()
    {
        return BlogPostCategory::with('posts')->simplepaginate(10);
    }

    public function getCategory($categoryid)
    {
        return BlogPostCategory::find($categoryid);
    }
}
