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
                    <!-- Image and Details -->
                    <div class="flex flex-col md:flex-row md:space-x-9 mb-8">
                        <!-- Album Info-->
                        <div class="md:w-1/2">
                            <!-- Title -->
                            <h3 class="font-bold text-3xl text-green-500 mb-4 mt-4">{{ $album->title }}</h3>
                            <!-- Artist -->
                            <div class="space-y-4">
                                <p class="text-xl">
                                    <span class="font-bold">Artist: </span> <!-- makes the word "artist" bold-->
                                    <span class="">{{ $album->artist }}</span>
                                </p>
                            <!--Release date  -->
                                <p class="text-gray-800 text-xl">
                                    <span class="font-bold">Release Date: </span> <!-- makes "release date:" bold-->
                                    <span class=""> {{ \Carbon\Carbon::parse($album->release_date)->format('d M Y') }}</span>
                                </p>
                            <!-- Duration -->
                                <p class="text-gray-800 text-xl">
                                    <span class="font-bold">Duration: </span> <!-- makes "duration" bold-->
                                    <span class="">{{ $album->duration }} mins </span>
                                </p>
                            </div>
                        </div>
                        
                        <!-- Album Cover with Spotify link -->
                        <div class="md:w-1/2 mt-6 md:mt-0">
                            <div class="relative flex justify-center md:justify-end">
                                @if ($album->image)
                                    <div class="relative">
                                        <img src="{{ asset('/images/albums/'.$album->image) }}" 
                                             alt="{{ $album->title }}" 
                                             class="w-64 h-64 object-cover rounded-lg shadow-lg">
                                        <a href="{{ $album->listen_link }}" target="_blank" 
                                           class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-70 text-white py-3 px-4 flex items-center justify-center rounded-b-lg hover:bg-opacity-80 transition duration-300">
                                            <!-- spotify logo -->
                                           <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                                            </svg>
                                            Listen on Spotify
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Tracklist -->
                    <div class="mt-8 border-t pt-6">
                        <h4 class="text-xl font-semibold mb-4">Tracklist</h4>
                        <ul class="list-decimal list-inside space-y-2 mb-8">
                            @foreach(explode(', ', $album->tracklist) as $track)
                                <li class="text-gray-700">{{ $track }}</li> <!-- breaks the "tracklist" string where there is a comma and turns it into a numbered list-->
                            @endforeach
                        </ul>

                        <!-- Action Buttons -->
                         <!-- edit button -->
                        <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-4 mt-6">
                            <a href="{{ route('albums.edit', $album->album_id) }}" 
                               class="inline-flex justify-center items-center text-black-600 bg-green-500 hover:bg-green-500 hover:text-white font-bold py-2 px-6 rounded-full transition duration-200">
                                Edit
                            </a>
                            <!-- delete button -->
                            <form action="{{ route('albums.destroy', $album->album_id) }}" method="POST"  
                                  onsubmit="return confirm('Are you sure you want to delete this album?');"> <!--  gives a confirmation message after pressing delete -->
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="inline-flex justify-center items-center bg-black text-white hover:bg-black-500 hover:text-green-500 font-bold py-2 px-6 rounded-full transition duration-200">
                                    Delete
                                </button>
                            </form>
                            <!-- return to index button -->
                            <a href="{{ route('albums.index') }}" 
                               class="inline-flex justify-center items-center text-green-500 hover:text-green-700 font-bold py-2 px-6 rounded-full border border-green-500 hover:border-green-700 transition duration-200">
                                Back to All Albums
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

