
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Genres') }}
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
                <div class="p-6 text-900">
                    <h3 class="font-semibold text-lg mb-4">All Genres</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <!-- genre card display -->
                        @foreach ($genres as $genre)
    <a href="{{ route('genres.show', $genre->id) }}" class="block">
        <x-genre-card :name="$genre->genre_name" />
    </a>
@endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>