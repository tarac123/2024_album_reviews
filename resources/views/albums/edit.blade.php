<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold tex-xl text-gray-800 leading-tight">
            {{ __ ('Create New Album') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7x1 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded">
            <div class="p-6 text-gray-900">
                <h3 class="font-semibold text-lg mb-4">Edit New Album</h3>
                
                <x-album-form
                    :action="route('albums.update',$album)"
                    :method="'PUT'"
                    :album="$album"
                    />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>