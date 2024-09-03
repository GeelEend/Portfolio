<x-guest-layout>

{{--    Projecten   --}}
@foreach($projects as $project)

    <div class="m-auto py-5 text-center mt-[10px]">
        <h2 class="text-2xl text-stone-500"> {{ $project->title }} </h2>
    </div>

    <div class="m-w-[384px] md:w-[1024px] md:h-[480px] mx-auto ">
        <div id="carouselExampleCaptions" class="carousel slide relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>
                <button
                    type="button"
                    data-bs-target="#carouselExampleCaptions"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
                <div class="carousel-item active relative float-left w-full">
                    <img
                        src="{{ '/storage/' . $project->picture1 }}"
                        class="block w-full"
                        alt="..."
                        style="height: 100%"
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">{{ $project->text1 }}</h5>

                    </div>
                </div>
                <div class="carousel-item relative float-left w-full">
                    <img
                        src="{{ '/storage/' . $project->picture2 }}"
                        class="block w-full"
                        alt="..."
                        style="height: 100%"
                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">{{ $project->text2 }}</h5>

                    </div>
                </div>
                <div class="carousel-item relative float-left w-full">
                    <img
                        src="{{ '/storage/' . $project->picture3 }}"
                        class="block w-full"
                        alt="..."
                        style="height: 100%"

                    />
                    <div class="carousel-caption hidden md:block absolute text-center">
                        <h5 class="text-xl">{{ $project->text3 }}</h5>

                    </div>
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div class="flex w-[384px] md:w-[984px] mx-auto space-between flex-col bg-white mt-[30px] md:mt-[0px] rounded-3xl">
        <div class="px-6 py-4 h-full text-center w-full text-stone-500">
            <h2 class="text-2xl"> {{ $project->title }}</h2>
            <h4>
                {{$project->description }}
            </h4>
            <h2 class="text-xl">
                Languages
            </h2>
            @foreach($project->tools AS $tool)
                {{$tool->title}},
            @endforeach
            </div>
    </div>

@endforeach

</x-guest-layout>
