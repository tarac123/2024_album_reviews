@extends('layouts.app')

@section('content')
    <h1>{{ $genre->name }}</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($albums as $album)
            <div>
                <h2>{{ $album->title }}</h2>
                <p>Artist: {{ $album->artist }}</p>
            </div>
        @endforeach
    </div>

    <a href="{{ route('albums.index') }}">Back to Albums</a>
@endsection