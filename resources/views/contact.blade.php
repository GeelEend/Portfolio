<x-guest-layout>
    <div class="min-h-[82vh] flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

        <form class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg" method="post">
            @if (session('status'))
                <div class="bg-green-600">
                    {{ session('status') }}
                </div>
            @endif
            @csrf
            <label class="block font-medium text-sm text-gray-700">Email</label>
            <input name="email" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"  type="Email">
            <label class="block font-medium text-sm text-gray-700">Voornaam</label>
            <input name="firstname" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"  type="text">
            <label class="block font-medium text-sm text-gray-700">Achternaam</label>
            <input name="lastname" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full"  type="text">
            <label class="block font-medium text-sm text-gray-700">Wat is uw vraag</label>
            <textarea name="question" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full min-h-[70px]"  type="text" ></textarea>
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mt-1">Verzend</button>
        </form>

    </div>
</x-guest-layout>
