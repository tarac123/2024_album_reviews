<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create genre') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold mb-4">Add a genre</h1>

        <!-- displays the genre-form component -->
        <x-genre-form 
            :action="route('genres.store')"  
            method="POST"  
            :genre="null" 
            :genres="$genres"  
            :albums="$albums" 
            :genreAlbums="[]"  
        />
    </div>
</x-app-layout>
