<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Genre') }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-semibold mb-4">Edit Genre</h1>
        <form action="{{ route('genres.destroy', $genre) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <x-dropdown-link :href="route('genres.destroy', $genre)" onclick="event.preventDefault(); this.closest('form').submit();">
        {{ __('Delete') }}
    </x-dropdown-link>
</form>

        <!-- Use the genre-form component -->
        <x-genre-form 
    :action="route('genres.update', $genre->id)" 
    method="PUT" 
    :genre="$genre" 
    :genres="$genres" 
    :albums="$albums" 
    :genreAlbums="$genreAlbums" 
/>

    </div>
</x-app-layout>
