<form action="{{ $action }}" method="POST" enctype="multipart/form-data" class="space-y-6 bg-white p-6 shadow-md rounded-md">
    @csrf
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif

    <!-- Genre Name -->
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Genre Name</label>
        <input
            type="text"
            name="name"
            id="name"
            value="{{ old('name', $genre->name ?? '') }}"
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
        />
        @error('name')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Albums Checkboxes -->
    <div>
        <label class="block text-sm font-medium text-gray-700">Albums</label>
        <div class="mt-2 space-y-2">
            @foreach ($albums as $album)
                <div class="flex items-center">
                    <input 
                        type="checkbox" 
                        id="album_{{ $album->id }}" 
                        name="albums[]" 
                        value="{{ $album->id }}" 
                        class="h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                    <label for="album_{{ $album->id }}" class="ml-2 text-sm text-gray-700">
                        {{ $album->title ?? 'Unnamed Album' }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Submit Button -->
    <div>
        <button type="submit" class="inline-flex justify-center items-center text-white bg-green-500 hover:bg-green-600 font-bold py-2 px-6 rounded-full transition duration-200">
            Update
        </button>
    </div>
</form>
