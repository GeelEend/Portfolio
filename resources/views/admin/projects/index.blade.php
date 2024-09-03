<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Projecten
        </h2>
    </x-slot>
    @if (session('status'))
        <div class="bg-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left">ID</th>
                                <th class="text-left">Titel</th>
                                <th class="text-left">Actief</th>
                                <th class="text-left">Opties</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->active }}</td>
                                <td>
                                    <a href="{{route ('admin.projects.edit', ['project' => $project])}}">Bewerken</a>
                                </td>
                                <td>
                                <form action="{{ route('admin.projects.destroy', ['project' => $project]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Verwijderen</button>
                                </form>
                                </td>
                            </tr>
                        </tbody>


                        @endforeach
                    </table>

                    <a href="{{ route('admin.projects.create') }}">Toevoegen</a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
