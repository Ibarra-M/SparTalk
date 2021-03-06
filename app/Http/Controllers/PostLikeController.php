<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{

    public function store(Post $post) {
        $post->like(auth()->user());
        return back();
    }

    public function destroy(Post $post) {
        $post->dislike(auth()->user());
        return back();
    }

}
