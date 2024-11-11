@props(['image','title', 'artist' , 'release_date'])

<div class="border rounded-lg shadow-md p-6 bg-white hover:shadow-lg hover:scale-105 transition-transform duration-300">
    <img src="{{ asset('/images/albums/'.$image) }}" alt="{{ $title }}" class="w-full h-auto" />
    <h4 class="font-bold text-lg pt-3">{{ $title }}</h4>
    <p class="text-green-800 mt-1 pb-0">{{ $artist }}</p>
    <p class="text-gray-600 mt-2">{{ \Carbon\Carbon::parse($release_date)->format('d M Y') }}</p>
</div>


