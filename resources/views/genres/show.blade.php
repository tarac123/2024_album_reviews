<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums in ') . $genre->genre_name }}
        </h2>
    </x-slot>

    <!-- Success Message -->
    @if (session('success'))
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Genre Title -->
                    <h3 class="font-bold text-3xl text-green-500 mb-4 mt-4">{{ $genre->genre_name }}</h3>

                    <!-- Check if there are albums -->
                    @if ($albums->isEmpty())
                        <p>No albums are available for this genre.</p>
                    @else
                        <!-- Albums Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                        @foreach ($albums as $album)
    <div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg hover:scale-105 transition-transform duration-300">
        <img src="{{ asset('/images/albums/'.$album->image) }}" alt="{{ $album->title }}" class="w-full h-auto" />
        <h4 class="font-bold text-lg mt-4">{{ $album->title }}</h4>
        <p>Artist: {{ $album->artist }}</p>
        <p>Release Date: {{ $album->release_date }}</p>
        <a href="{{ route('albums.show', $album->id) }}" class="text-green-500 font-bold hover:underline mt-4 block">
            View Details
        </a>
    </div>
@endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-dropdown-link :href="route('genres.edit', $genre->id)">
    {{ __('Edit') }}
</x-dropdown-link>
</x-app-layout>
