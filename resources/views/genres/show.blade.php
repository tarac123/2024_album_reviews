<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums in ') . $genre->name }}
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
                    
                    <!-- Genre Title and Edit Button -->
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-bold text-3xl text-green-500">{{ $genre->_name }}</h3>
                        @if(auth()->user()->role === 'admin')
                        <x-dropdown-link :href="route('genres.edit', $genre->id)" class="inline-flex justify-center items-center text-xl text-green-500 hover:text-green-700 font-bold py-2 px-6 rounded-full border border-green-500 hover:border-green-700 transition duration-200">
                            {{ __('Edit') }}
                        </x-dropdown-link>
                        @endif
                    </div>

                    <!-- Check if there are albums -->
                    @if ($albums->isEmpty())
                        <p>No albums are available for this genre.</p>
                    @else
                        <!-- Albums Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                        @foreach ($albums as $album)
                    <div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg hover:scale-105 transition-transform duration-300" >
                        <img src="{{ asset('/images/albums/'.$album->image) }}" alt="{{ $album->title }}" class="w-full h-auto" />
                        <h4 class="font-bold text-lg mt-4">{{ $album->title }}</h4>
                        <p>Artist: {{ $album->artist }}</p>
                        <p>Released: {{ \Carbon\Carbon::parse($album->release_date)->format('d M Y') }}</p>
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

</x-app-layout>
