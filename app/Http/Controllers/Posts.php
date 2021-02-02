<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class Posts extends Controller
{   

    /**
     * Liste des posts
     *
     * @return view
     */
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')
                      ->paginate(4);
        return view('posts.index', compact('posts'));
    }
}
