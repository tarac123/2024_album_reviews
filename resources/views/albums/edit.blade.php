<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Album') }}
        </h2>
    </x-slot>

    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Edit Album</h1>

        <x-album-form 
            :action="route('albums.update', $album->id)"
            method="PUT"
            :album="$album"
        />
    </div>
</x-app-layout>






