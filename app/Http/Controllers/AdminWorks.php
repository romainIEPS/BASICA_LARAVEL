<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Work;

class AdminWorks extends Controller
{
    /**
     * Select de tous les works
     * 
     * @return view
     */
    public function index() {
        $works = Work::all();

        return view('admin.works.index', compact('works'));
    }

    /**
     * Formulaire d'ajout d'un work
     *
     * @return view
     */
    public function addForm() {
        return view('admin.works.addForm');
    }

    /**
     * Insert d'un work
     *
     * @param Request $request
     * @return view
     */
    public function add(Request $request) {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = $request->file('image')->getClientOriginalName();
        $image->move(public_path('assets/img/portfolio'), $imageName);

        $work = new Work;
        $work->title = $request->title;
        $work->content = $request->content;
        $work->image = $imageName;
        $work->inSlider = 1;
        $work->created_at = now();
        $work->updated_at = null;
        $work->client_id = $request->client;
        $work->save();
        $work->tags()->attach($request->tags);
        
        return redirect()->route('admin.portfolio.index');
    }

    /**
     * Formulaire de modification d'un work
     *
     * @return view
     */
    public function editForm(Work $work) {
        return view('admin.works.editForm', compact('work'));
    }

    /**
     * Update d'un work
     *
     * @param Work $work
     * @param Request $request
     * @return void
     */
    public function edit(Work $work, Request $request) {
        $work->title = $request->title;
        $work->content = $request->content;
        $work->updated_at = now();
        $work->client_id = $request->client;
        $work->save();
        $work->tags()->detach($request->tags);
        $work->tags()->attach($request->tags);

        return redirect()->route('admin.portfolio.index');
    }

    /**
     * Suppression d'un work
     *
     * @param Work $work
     * @return void
     */
    public function delete(Work $work) {
        $work->tags()->detach();
        $work->delete();

        return redirect()->route('admin.portfolio.index')
                         ->with('status', "Suppresion effectué !");
    }
}
