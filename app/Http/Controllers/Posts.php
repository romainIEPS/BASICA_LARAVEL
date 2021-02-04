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

    /**
     * Liste des posts
     * pour l'admin
     *
     * @return void
     */
    public function adminPostsIndex() {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts')); 
    }

    /**
     * Formulaire d'ajout d'un post
     *
     * @return view
     */
    public function adminPostsAddForm() {
        return view('admin.posts.addForm');
    }

    /**
     * Ajout d'un post
     *
     * @param Request $request
     * @return void
     */
    public function adminPostsAdd(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = $request->file('image')->getClientOriginalName();
        $image->move(public_path('assets/img/blog'), $imageName);

        $post = new Post;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $imageName;
        $post->created_at = now();
        $post->updated_at = null;
        $post->categorie_id = $request->categorie;
        $post->save();
        
        return redirect()->route('admin.posts.index');
    }

    /**
     * Formulaire de modification d'un post
     *
     * @param Post $post
     * @return void
     */
    public function adminPostsEditForm(Post $post) {
        return view('admin.posts.editForm', compact('post'));
    }

    /**
     * Update d'un post
     *
     * @param Post $post
     * @param Request $request
     * @return void
     */
    public function adminPostsEdit(Post $post, Request $request) {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->updated_at = now();
        $post->categorie_id = $request->categorie;
        $post->save();

        return redirect()->route('admin.posts.index');
    }
}
