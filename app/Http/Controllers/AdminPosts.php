<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class AdminPosts extends Controller
{
    /**
     * Liste des posts
     *
     * @return void
     */
    public function index() {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts')); 
    }

    /**
     * Formulaire d'ajout d'un post
     *
     * @return view
     */
    public function addForm() {
        return view('admin.posts.addForm');
    }

    /**
     * Ajout d'un post
     *
     * @param Request $request
     * @return void
     */
    public function add(Request $request) {
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
        
        return redirect()->route('admin.posts.index')
                         ->with('status', "Ajout effectué !");;
    }

    /**
     * Formulaire de modification d'un post
     *
     * @param Post $post
     * @return void
     */
    public function editForm(Post $post) {
        return view('admin.posts.editForm', compact('post'));
    }

    /**
     * Update d'un post
     *
     * @param Post $post
     * @param Request $request
     * @return void
     */
    public function edit(Post $post, Request $request) {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->updated_at = now();
        $post->categorie_id = $request->categorie;
        $post->save();

        return redirect()->route('admin.posts.index')
                         ->with('status', "Modification effectuée !");;
    }

    public function delete(Post $post) {
        $post->delete();

        return redirect()->route('admin.posts.index')
                         ->with('status', "Suppresion effectuée !");
    }
}
