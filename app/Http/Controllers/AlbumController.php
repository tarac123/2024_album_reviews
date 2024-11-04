<?php

namespace App\Http\Controllers;

use App\Models\Album;
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2080',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/albums'), $imageName); // Save the image to the server
        }

        Album::create([
            'title' => $request->title,
            'artist' => $request->artist,
            'release_date' => $request->release_date,
            'image' => $imageName, // Save the image name
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return to_route('albums.index')->with('success', 'Album added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
