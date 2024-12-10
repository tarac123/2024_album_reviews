@props(['action', 'method', 'genre', 'albums', 'image', 'name' , 'genreAlbums'])

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

   
    @foreach ($albums as $album)
           
           <div>
              
               <input type="checkbox" id="album_{{ $album->id }}" name="albums[]" value="{{ $album->id }}"
               @if(isset($genreAlbum) && in_array($album->id, $genreAlbum)) checked @endif>
               <label for="album_{{ $album->id }}" class="ml-2">{{ $album->name }}</label>
           </div>
           @endforeach


    <!-- Submit Button -->
    <div>
    <button type="submit" class="inline-flex justify-center items-center text-black-600 bg-green-500 hover:bg-green-500 hover:text-white font-bold py-2 px-6 rounded-full transition duration-200"">
    {{ isset($album) ? 'Update Album' : 'Add Album' }}
    </button>
    </div>
</form>