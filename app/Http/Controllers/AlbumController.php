<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all(); //fetch all albums
        return view('albums.index', compact('albums')); //return the view with albums
    }

    public function genre(Genre $genre)
    {   
        dd($genre);
        $albums = $genre->albums;
        return view('albums.genre', compact('albums', 'genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        if (auth()->user()->role !== 'admin') {
            return redirect()->route('albums.index')->with('error', 'Access denied');
        }
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'artist' => 'required|max:100',
            'release_date' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2080',
            'tracklist' => 'nullable|max:3000', // Make tracklist optional
            'duration'=>'required|integer',
            'listen_link'=>'required|string'
        ]);

            // Handle the image upload
    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/albums'), $imageName); // Save the image to the server
    } else {
        $imageName = 'default.png'; // Optional: specify a default image if none is uploaded
    }
    
        Album::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'release_date' => $request->release_date,
            'image' => $imageName,
            'tracklist' => $request->tracklist ?? '', // Provide an empty string if tracklist is null
            'duration'=> $request->duration,
            'listen_link'=>$request->listen_link,
        ]);
    
        return redirect()->route('albums.index')->with('success', 'Album added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        // Validate the input data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'artist' => 'required|string|max:255',
            'tracklist' => 'nullable|string',
            'duration' => 'nullable|numeric',
            'listen_link' => 'nullable|url',
            'image' => 'nullable|image', // If you're allowing an image upload
        ]);
    
        // Update the album with validated data
        $album->update($validated);
    
        // Redirect to the album show page
        return redirect()->route('albums.show', $album->id)->with('success', 'Album updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // Delete the album
        $album->delete();
    
        // Redirect to the albums index with success message
        return redirect()->route('albums.index')->with('success', 'Album deleted successfully!');
    }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Search in title, artist, and tracklist
        $albums = Album::where('title', 'like', "%{$query}%")
                      ->orWhere('artist', 'like', "%{$query}%")
                      ->orWhere('tracklist', 'like', "%{$query}%")
                      ->get();
        
                      return view('albums.search', [
                        'albums' => $albums,
                        'query' => $query
                    ]);
    }

}
