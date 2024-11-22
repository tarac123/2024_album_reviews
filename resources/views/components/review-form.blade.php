<form action="{{ $action }}" method="POST">
    @csrf
    @if ($method !== 'POST')
        @method($method)
    @endif

    @if($method === 'POST')
        <input type="hidden" name="album_id" value="{{ $album->id }}">
    @endif

    <!-- Rating Field -->
    <div class="mb-4">
        <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
        <select id="rating" name="rating" class="block w-full mt-1" required>
            @for ($i = 1; $i <= 5; $i++)
                <option value="{{ $i }}" {{ (old('rating', $review->rating ?? '') == $i) ? 'selected' : '' }}>
                    {{ $i }}
                </option>
            @endfor
        </select>
        @error('rating')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Comment Field -->
    <div class="mb-4">
        <label for="comment" class="block text-sm font-medium text-gray-700">Comment</label>
        <textarea id="comment" name="comment" rows="4" 
                  class="block w-full mt-1 border-gray-300 rounded-md" required>{{ old('comment', $review->comment ?? '') }}</textarea>
        @error('comment')
            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <!-- Submit Button -->
    <div class="mt-4">
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            {{ $buttonText }}
        </button>
    </div>
</form>
