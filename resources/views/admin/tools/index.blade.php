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
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Titel</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tools as $tool)
                            <tr>
                                <td>{{ $tool->id }}</td>
                                <td>{{ $tool->title }}</td>

                                <td>
                                    <form action="{{ route('admin.tools.destroy', ['tool' => $tool]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Verwijderen</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>


                        @endforeach

                    </table>
                    <a href="{{ route('admin.tools.create') }}">Toevoegen</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
