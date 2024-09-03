<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Projecten
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form class="" action="" method="post" enctype="multipart/form-data">

                        @csrf

                        <input class="w-full" type="text" name="title" placeholder="titel" value="{{ $project->title ?? ''}}"><br>
                        <textarea class="w-full" type="text" name="description" placeholder="beschrijving">{{ $project->description ?? '' }}</textarea><br>

                        <div class="flex flex-row justify-around">
                        <img src="{{ '/storage/' . ($project->picture1) }}" style="width:200px;"/>
                        <img src="{{ '/storage/' . ($project->picture2) }}" style="width:200px;"/>
                        <img src="{{ '/storage/' . ($project->picture3) }}" style="width:200px;"/>
                        </div>

                        <input class="w-[33%]" type="file" accept="image/*" name="picture1" placeholder="foto1" value="{{ $project->picture1 ?? ''}}">
                        <input class="w-[33%]" type="file" accept="image/*" name="picture2" placeholder="foto2" value="{{ $project->picture2 ?? ''}}">
                        <input class="w-[33%]" type="file" accept="image/*" name="picture3" placeholder="foto3" value="{{ $project->picture3 ?? ''}}"><br>
                        <input class="w-[33%]" type="text" name="text1" placeholder="text1" value="{{ $project->text1 ?? ''}}">
                        <input class="w-[33%]" type="text" name="text2" placeholder="text2" value="{{ $project->text2 ?? ''}}">
                        <input class="w-[33%]" type="text" name="text3" placeholder="text3" value="{{ $project->text3 ?? ''}}">

                        Active
                        <input type="checkbox" name="active" @if(!empty($project->active)) checked @endif value="1">

                        <div>

            {{--        Tools toevoegen         --}}

                        @foreach ($tools AS $tool)
                            <input type="checkbox" name="tools[]" @if ($project->tools->pluck('id')->contains($tool->id)) checked @endif value="{{ $tool->id }}"> {{ $tool->title }}<br />
                        @endforeach

                        </div>

                        <button type="submit">opslaan</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
