<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("HERE we need to put song details") }}

                    <!-- TODO: display list of available songs -->
                    <h2>DETAILS</h2>
                    <p>{{ $lyrics->song_name }}</p>
                    <p>{{ $lyrics->artist_name }}</p>
                    <p>{{ $lyrics->foreign_lyrics }}</p>
                    <p>{{ $lyrics->english_lyrics }}</p>
                    <p>{{ $lyrics->youtube_link }}</p>
                    


                    <!-- TODO: make separate song detail page -->

                </div>
            </div>


           


        </div>
    </div>
</x-app-layout>
