<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class ComicCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comics = Comic::all(); //SELECT * FROM COMIC
        return view('pages.ComicsViews.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.ComicsViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $form_data= $request->all();

        $request->validate([
            'title' => 'required| max:255',
            'description' => 'required| max:8192',
            'type' => 'required| max:255',
            'thumb' => 'required| max:255',
            'price' => 'required| max:255',
            'sale_date' => 'required| max:255',
            'series' => 'required| max:255',

        ]);



        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        // $comic = Comic::findOrFail($id);

        return view('pages.ComicsViews.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('pages.ComicsViews.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $form_data= $request->all();
        $comic = Comic::findOrFail($id);
        $comic->update($form_data);
        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comics = Comic::findOrFail($id);

        $comics->delete();

        return redirect()->route('comics.index');
    }
}
