<x-app-layout>
    <x-slot name="header">
        <!-- give the search result header -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Results') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- displays the results of the search query -->
                    <h3 class="font-semibold text-lg mb-4">
                        Results for "{{ $query }}"
                    </h3>
                    <!-- if the search results are empty it displays a message saying No albums found -->
                    @if($albums->isEmpty())
                        <p class="text-gray-500 text-center py-8">No albums found.</p>
                    @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <!-- displays the returned album results (album title, aritst and release date) -->
                    @foreach($albums as $album)
                    <div class="bg-white rounded-lg shadow-md overflow-hidden transition-transform hover:scale-105">
                        <a href="{{ route('albums.show', $album->album_id) }}" class="block">
                            <div class="aspect-w-1 aspect-h-1">
                        <img 
                            src="{{ asset('images/albums/' . $album->image) }}" 
                            alt="{{ $album->title }}" 
                            class="w-full h-48 object-cover"
                        >
                        </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-lg text-gray-800 hover:text-blue-600">
                            {{ $album->title }}
                        </h3>
                        <p class="text-gray-600 mt-1">by {{ $album->artist }}</p>
                        <p class="text-sm text-gray-500 mt-2">
                            Released: {{ \Carbon\Carbon::parse($album->release_date)->format('M d, Y') }}
                        </p>
                    </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

