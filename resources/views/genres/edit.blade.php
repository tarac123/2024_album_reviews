@extends('layouts.app')

@section('content')
    <h1>Edit Genre</h1>
    <form action="{{ route('genres.update', $genre->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>

        <!-- add component called genre-form -->
        <x-genre-form                            
                               :action="route('genres.update', $genre)"
                               :method="'PATCH'"
                               :genre="$genre"
                               :albums="$albums"  
                               :genreAlbums='$genreAlbums'                            
                            />
        <input type="text" name="name" value="{{ $genre->name }}" required>
        <button type="submit">Update</button>
   
@endsection

<div>
        <x-primary-button>
            {{ isset($category) ? 'Update Category' : 'Add Category' }}
        </x-primary-button>
    </div>
</form>
 