<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{

    public function create()
    {
        return view('reviews.create'); // Adjust to match your setup
    }
    /**
     * Edit a review.
     */
    public function edit(Review $review)
    {
        // Check if the user is authorized to edit the review
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('albums.index')->with('error', 'Access denied.');
        }

        // Return the edit view with the review
        return view('reviews.edit', compact('review'));
    }

    /**
     * Update a review.
     */
    public function update(Request $request, Review $review)
    {
        // Check authorization
        if (auth()->user()->id !== $review->user_id && auth()->user()->role !== 'admin') {
            return redirect()->route('albums.index')->with('error', 'Access denied.');
        }
    
        // Validation for the review update
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);
    
        // Update the review with validated data
        $review->update($request->only(['rating', 'comment']));
    
        // Redirect back to the album page with a success message
        return redirect()->route('albums.show', $review->album_id)
                         ->with('success', 'Review updated successfully.');
    }

    public function store(Request $request, Album $album)
    {
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'required|string|max:500',
        ]);
    
        $album->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $validated['rating'],
            'comment' => $validated['comment'],
        ]);
    
        return redirect()->route('albums.show', $album->id)
                         ->with('success', 'Review added successfully!');
    }
    
    
 
}
