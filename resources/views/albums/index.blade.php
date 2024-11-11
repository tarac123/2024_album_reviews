
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Albums') }}
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
                    <h3 class="font-semibold text-lg mb-4">All Albums</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach($albums as $album)
                            <!-- Album Card Component -->
                            <a href="{{ route('albums.show', $album->album_id) }}" class="block">
                                <x-album-card 
                                    :title="$album->title"
                                    :image="$album->image"
                                    :artist="$album->artist"
                                    :release_date="$album->release_date"
                                />
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
