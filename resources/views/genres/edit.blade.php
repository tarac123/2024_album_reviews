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
    <x-dropdown-link class="inline-flex justify-center items-center text-green-500 hover:text-green-700 text-xl mb-4 font-bold py-2 px-6 rounded-full border border-green-500 hover:border-green-700 transition duration-200" :href="route('genres.destroy', $genre)" onclick="event.preventDefault(); this.closest('form').submit();">
        {{ __('Delete') }}
    </x-dropdown-link>
</form>

        <!-- displays the genre-form component -->
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
