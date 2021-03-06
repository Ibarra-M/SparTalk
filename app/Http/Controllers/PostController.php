<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index()
    {
        return view('posts.index', [
            'posts' => auth()->user()->timeline()
        ]);
    }

    public function store() {
        $attributes = request()->validate(['body' => 'required|max:255']);
        Post::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
        ]);
        return redirect('/posts');
    }

}
