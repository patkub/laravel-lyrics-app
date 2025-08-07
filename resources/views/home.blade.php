<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div> -->

            <!-- TODO: display list of available songs -->


                    <!-- TODO: make separate song detail page -->


            @foreach ($lyrics as $lyric)
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-3">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <article class="flex">
                            {{-- <img src="{{ asset('images/placeholder-150x150.png') }}" alt="Post Image"
                            class="w-32 h-32 object-cover rounded"> --}}
                            <div>
                                <h3 class="text-lg font-semibold dark:text-gray-100">
                                    <a href="{{ route('lyrics.show', $lyric) }}" class="hover:underline">{{ $lyric->song_name }}</a>
                                </h3>
                                <p class="text-gray-600 dark:text-gray-100">{{ $lyric->artist_name }}</p>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</x-app-layout>
