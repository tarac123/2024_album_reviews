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
        return view('genres.index', compact('genres')); // Pass genres to the view
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all genres, so you can pass them to the view (if needed)
        $genres = Genre::all();
    
        // Fetch all albums to associate with the genre
        $albums = Album::all();
    
        // Passing genres and albums to the view
        return view('genres.create', compact('genres', 'albums'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'albums' => 'nullable|array', // Albums should be an array
            'albums.*' => 'exists:albums,id', // Each album ID should exist in the albums table
        ]);
    
        // Create the new genre
        $genre = Genre::create([
            'name' => $validated['name'],
        ]);
    
        // Attach the selected albums to the genre (if any)
        if (isset($validated['albums'])) {
            $genre->albums()->attach($validated['albums']);
        }
    
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
        $genres = Genre::all(); // Retrieve all genres
        $albums = Album::all(); // Retrieve all albums
        $genreAlbums = $genre->albums->pluck('id')->toArray(); // Get IDs of associated albums
    
        return view('genres.edit', compact('genre', 'genres', 'albums', 'genreAlbums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'albums' => 'nullable|array',
            'albums.*' => 'exists:albums,id',
        ]);
    
     
    
        $genre->albums()->sync($validated['albums'] ?? []);
    
        return redirect()->route('genres.index')->with('success', 'Genre updated successfully.');
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
