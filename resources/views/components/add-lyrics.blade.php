<div>
    <!-- Well begun is half done. - Aristotle -->

    <form class="w-full" action="{{ route('add-lyrics.create') }}" method="POST">
        @csrf
        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-100 text-xs font-bold mb-2" for="song_name">
                    Song Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 dark:bg-gray-900 text-gray-700 dark:text-gray-100 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                    id="song_name"
                    name="song_name" type="text">
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-100 text-xs font-bold mb-2" for="artist_name">
                    Artist Name
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 dark:bg-gray-900 text-gray-700 dark:text-gray-100 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:border-gray-500"
                    id="artist_name"
                    name="artist_name" type="text">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-3">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 dark:text-gray-100 text-xs font-bold mb-2" for="youtube_link">
                    Youtube Link ( https://tube.rvere.com/embed?v=BUEMn8IeDfQ )
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 dark:bg-gray-900 text-gray-700 dark:text-gray-100 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                    id="youtube_link"
                    name="youtube_link" type="text">
            </div>
        </div>

        <div class="col-span-full">
            <label for="foreign_lyrics" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Lyrics Foreign</label>
            <div class="mt-2">
                <textarea id="foreign_lyrics" name="foreign_lyrics" rows="3"
                    class="block w-full rounded-md bg-white dark:bg-gray-900 px-3 py-1.5 text-base text-gray-900 dark:text-white outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-600 dark:text-gray-200">Foreign lyrics</p>
        </div>

        <div class="col-span-full">
            <label for="english_lyrics" class="block text-sm/6 font-medium text-gray-900 dark:text-gray-100">Lyrics English</label>
            <div class="mt-2">
                <textarea id="english_lyrics" name="english_lyrics" rows="3"
                    class="block w-full rounded-md bg-white dark:bg-gray-900 px-3 py-1.5 text-base text-gray-900 dark:text-white outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-600 dark:text-gray-200">English lyrics</p>
        </div>

        <div class="flex flex-wrap mb-6">
            <input type="submit" value="Add Lyrics"
                class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-hidden focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
            </input>
        </div>

    </form>

</div>
