
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Album Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="font-semibold text-lg mb-4">Album: {{ $album->title }}</h3>

                    <div>
                        <strong>Artist:</strong> {{ $album->artist }} <br>
                        <strong>Release Date:</strong> {{ $album->release_date }} <br>
                        <strong>Duration:</strong> {{ $album->duration ?? 'N/A' }} <br>
                        <strong>Image:</strong> <img src="{{ asset('images/albums/' . $album->image) }}" alt="Album Image" width="200">
                    </div>

                    <!-- Edit Button -->
                    <div class="mt-4">
                        <a href="{{ route('albums.edit', $album) }}" class="text-gray-600 bg-orange-300 hover:bg-orange-700 font-bold py-2 px-4 rounded">
                            Edit Album
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

