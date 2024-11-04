@props(['title', 'release_date', 'image', 'artist'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg transition duration-300">
    <h4 class="font-bold text-lg">{{ $title }}</h4>
    <img src="{{ asset($image) }}" alt="{{ $title }}" class="w-full h-auto" /> <!-- Ensure to use asset() to generate the correct URL -->
    <p class="text-gray-600">({{ \Carbon\Carbon::parse($release_date)->format('M d, Y') }})</p>
    <p class="text-gray-800 mt-4">{{ $artist }}</p>
</div>



