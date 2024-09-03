<x-guest-layout>
    <div class="flex space-between  m-h-[1080px] md:h-[540px] md:w-[1024px] m-w-[384px]  mx-auto mt-[50px] flex-col  md:flex-row ">
        <div class="flex align-center flex-col w-[384px] h-[540px] goeie-kleur mx-auto rounded-3xl px-5 py-5">
            <img class="w-1/2 h-[172px] rounded-full mb-[30px]" src="img/mijnnftvan10mil.png"/>
            <div class="text-center text-white text-l">
                <h2 class="text-2xl">Over mij</h2><br>
                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h4>
            </div>
        </div>

        <div class="h-[540px] m-w-[384px] md:w-[640px]">
            <div class="m-w-[384px] md:w-[640px] h-[270px] px-7 py-5 text-stone-500">
                <h2 class="text-2xl"> Titel</h2>
                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h4>
            </div>
            <div class="m-w-[384px] md:w-[640px] h-[270px] px-7 py-5 text-stone-500">
                <h2 class="text-2xl"> Titel</h2>
                <h4>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</h4>
            </div>
        </div>
    </div>



    <div class=" max-w-[384px] md:max-w-[1024px] goeie-kleur rounded-3xl mx-auto md:mt-[50px] px-5 py-5">

        <div class="text-center h-[32px] ">
            <h2 class="text-white text-2xl">Projecten</h2>
        </div>

        <div class="flex md:grid grid-cols-3 space-between flex-col align-center  md:flex-row">
            @foreach($projects as $project)
            <div class="flex flex-col align-center w-[328px] h-[440px]">
                <div class="w-full h-[320px] py-4 px-5">
                    <img class="w-full h-full bg-white" src="{{ '/storage/' . $project->picture1 }}"/>
                </div>
                <div class="text-center text-stone-300 h-[44px] w-full">
                    <h2 class="text-white text-2xl">{{ $project->title }}</h2>
                </div>
                <div class="flex items-end justify-center w-full h-[36px]">
                    <button class="rounded-full border-2  border-stone-300 w-[164px] py-1 text-white" onclick="location.href='{{asset('projecten')}}';">Naar Projecten</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</x-guest-layout>
