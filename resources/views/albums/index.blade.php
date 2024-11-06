<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Albums') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-6 text-gray-900">
                <div class="border p-4 rounded-lg shadow-md">
                    <a href="{{ route('albums.show',$album) }}">
                        <x-album-card :title="$album->title" :artist="$album->artist" :image="$album->image" release_date="$album->release_date" />
                    </a>
                    <!-- edit and delete buttons -->
                    <div class="mt-4 flex space-x-2">
                        <!-- edit -->
                        <a href="{{ route('albums.edit',$album) }}" class="text-gray-600 bg orange-300 hover:bgorange-700 font-bold py-2 px-4 rounded">
                            Edit 
                        </a>
                    


                    <!-- <div class="p-6 text-gray-900">
                        <h3 class="font-semibold text-lg mb-4">List of Albums</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($albums as $album)
                                <x-album-card 
                                    :title="$album->title"
                                    :image="$album->image"
                                    :artist="$album->artist"
                                    :release_date="$album->release_date"
                                />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- success message -->
        <x-alert-success>
            {{ session('success') }}
        </x-alert-success>
</x-app-layout>

