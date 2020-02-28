<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        $posts = Post::latest()
            ->take(3)
            ->get();

        if ($post->isPublished() || auth()->check())
        {
            return view('posts.show', compact('post', 'posts'));
        }
        abort(404);
    }
}
