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

    /**
     * Détail d'un post
     *
     * @param Post $post
     * @return view
     */
    public function show(Post $post) {
        return view('posts.show', compact('post'));
    }
}
