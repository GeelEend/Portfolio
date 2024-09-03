<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Contacten
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <thead>
                        <tr>
                            <th class="text-left">ID</th>
                            <th class="text-left">Email</th>
                            <th class="text-left">Voornaam</th>
                            <th class="text-left">Achternaam</th>
                            <th class="text-left">Vraag</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($contacts as $contact)
                            <tr>
                                <td>{{ $contact->id }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->firstname }}</td>
                                {{--                                <td class="max-h-[30px] overflow-hidden">{{ $project->description }}</td>--}}
                                <td>{{ $contact->lastname }}</td>
                                <td>{{ $contact->question }}</td>
                                <td>
                                </td>
                                <td>
                                    <form action="{{ route('admin.contact.destroy', ['contact' => $contact]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Verwijderen</button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>


                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
