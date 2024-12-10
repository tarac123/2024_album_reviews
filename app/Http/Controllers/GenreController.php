<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Album;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all(); // Fetch all genres
        return view('genres.index', compact('genres'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:genres|max:255',
            
        ]);
    
        Genre::create($request->all());
        return redirect()->route('genres.index')->with('success', 'Genre created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Genre $genre)
    {
        // Load the albums associated with the genre
        $albums = $genre->albums;
    
        // Pass the genre and albums to the view
        return view('genres.show', compact('genre', 'albums'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Genre $genre)
    {
 
        $albums = Album::all();
       
        $genreAlbums = $genre->albums->pluck('id')->toArray();
        // return redirect(route('categories.edit'));
        return view('genres.edit', compact('genre', 'albums', 'genreAlbums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:1000',
 
           
        ]);
        $genre->update($validated);
 
        $albums = $request->albums ?? [];
 
        $genre->albums()->detach();
       
        if (!empty($albums)) {
            $genre->albums()->attach($albums);
        }
        return redirect()->route('genres.index')->with('success', 'Review updated Successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Genre $genre)
    {
        $genre->delete();
        return redirect()->route('genres.index')->with('success', 'Genre deleted successfully.');
    }
}
