<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <!-- Song name -->
                    <h1 class="text-3xl">{{ $lyrics->song_name }}</h1>
                    <p class="text-2xl">{{ $lyrics->artist_name }}</p>

                    <!-- Youtube -->
                    <p>
                        <iframe class="w-full h-full" style="height:500px" src="{{ $lyrics->youtube_link }}" title=""
                            frameBorder="0" allowFullScreen></iframe>
                    </p>

                    <!-- Lyrics side by side -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="text-xl p-4">
                            {{ $lyrics->foreign_lyrics }}
                        </div>

                        <div class="text-xl p-4">
                            {{ $lyrics->english_lyrics }}
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
