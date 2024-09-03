<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tools
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class="" action="{{ route('admin.tools.list') }}" method="post">
                        @csrf
                        <input class="w-full" type="text" name="title" placeholder="titel" value="{{ $tool->title ?? ''}}"><br>
                        <button type="submit">opslaan</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
