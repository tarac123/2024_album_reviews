@props(['action', 'method','album'])

<form action="{{ $action }}" method="POST" enctype="multipart/form-data">
    @csrf 
    @if($method === 'PUT' || $method === 'PATCH')
        @method($method)
    @endif 

    <!-- Title Input -->
    <div class="mb-4">
        <label for="title" class="block text-sm text-gray-700">Title</label>
        <input
            type="text"
            name="title"
            id="title"
            value="{{ old('title', $album->title ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

        <!-- Artist Input -->
        <div class="mb-4">
        <label for="artist" class="block text-sm text-gray-700">Artist</label>
        <input
            type="text"
            name="artist"
            id="artist"
            value="{{ old('title', $album->title ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

            <!-- Tracklist Input -->
            <div class="mb-4">
        <label for="tracklist" class="block text-sm text-gray-700">Tracklist</label>
        <input
            type="text"
            name="tracklist"
            id="tracklist"
            value="{{ old('title', $album->title ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

            <!-- Duration Input -->
            <div class="mb-4">
        <label for="duration" class="block text-sm text-gray-700">Duration (mins)</label>
        <input
            type="number"
            name="duration"
            id="duration"
            value="{{ old('title', $album->title ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

            <!-- Listen Link Input -->
            <div class="mb-4">
        <label for="listen_link" class="block text-sm text-gray-700">Listen Link - Spotify</label>
        <input
            type="text"
            name="listen_link"
            id="listen_link"
            value="{{ old('title', $album->title ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

    <!-- Image Input -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Album Cover Image</label>
        <input
            type="file"
            name="image"
            id="image"
            {{ isset($album) ? 'required' : '' }} 
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" />

        @error('image')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

            <!-- Release Date Input -->
            <div class="mb-4">
        <label for="release_date" class="block text-sm text-gray-700">Release Date </label>
        <input
            type="date"
            name="release_date"
            id="release_date"
            value="{{ old('title', $album->title ?? '') }}"  
            required
            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" /> 
        
        @error('title')
            <p class="text-sm text-red-600">{{ $message }}</p> 
        @enderror
    </div>

    <!-- Display existing album cover image if available -->
    @isset($album->image)
        <div class="mb-4">
            <label class="block text-sm text-gray-700">Current Album Cover:</label>
            <img src="{{ asset($album->image) }}" alt="album cover" class="w-24 h-32 object-cover mt-2">
        </div>  
    @endisset

    <!-- Submit Button -->
    <div>
        <x-primary-button>
            {{ isset($album) ? 'Update Album' : 'Add Album' }}
        </x-primary-button>
    </div>
</form>
