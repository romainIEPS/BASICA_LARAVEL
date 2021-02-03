<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Work;

class Works extends Controller
{
    /**
     * Liste des works
     *
     * @return view
     */
    public function index() {
        $works = Work::orderBy('created_at', 'desc')
                    ->take(6)
                    ->get();

        return view('works.index', compact('works'));        
    }

    /**
     * Détail d'un work
     *
     * @param Work $work
     * @return view
     */
    public function show(Work $work) {
        $similarWorks = Work::whereHas('tags', function ($q) use ($work) {
            return $q->whereIn('name', $work->tags->pluck('name'));
        })
        ->where('id', '!=', $work->id)
        ->get();
        return view('works.show', compact('work', 'similarWorks'));
    }

    /**
     * Affichage des x works suivant
     *
     * @param Request $request
     * @return view
     */
    public function more(Request $request) {
        $limit = (isset($request->limit)) ? $request->limit : 6;

        $works = Work::orderBy('created_at', 'desc')
                    ->take($limit)
                    ->offset($request->offset)
                    ->get();
        return view('works._liste', compact('works'));
    }

    /**
     * Select de tous les works
     * pour l'admin
     * @return view
     */
    public function adminWorksIndex() {
        $works = Work::all();

        return view('admin.works.index', compact('works'));
    }

    /**
     * Formulaire d'ajout d'un work
     *
     * @return view
     */
    public function adminWorksAddForm() {
        return view('admin.works.addForm');
    }

    /**
     * Insert d'un work
     *
     * @param Request $request
     * @return view
     */
    public function adminWorksAdd(Request $request) {
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
}
