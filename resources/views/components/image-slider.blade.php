<div class="slider relative h-screen">
    <div class="list absolute inset-0">
        @foreach($slides as $slide)
            <div class="item opacity-0 transition-opacity duration-500 {{ $loop->first ? 'active opacity-100' : '' }}">
                <img src="{{ asset('images/' . $slide['image']) }}" class="w-full h-full object-cover">
                <div class="content absolute left-10 top-20 text-white z-10">
                    <p class="uppercase tracking-widest">{{ $slide['subtitle'] }}</p>
                    <h2 class="text-5xl font-bold">{{ $slide['title'] }}</h2>
                    <p class="mt-4">{{ $slide['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <div class="arrows absolute top-1/2 transform -translate-y-1/2 right-4 z-20">
        <button id="prev" class="bg-gray-700 p-2 rounded text-white">&lt;</button>
        <button id="next" class="bg-gray-700 p-2 rounded text-white">&gt;</button>
    </div>

    <div class="thumbnail absolute bottom-10 left-1/2 transform -translate-x-1/2 flex space-x-2">
        @foreach($slides as $slide)
            <div class="item h-40 w-32 flex-shrink-0">
                <img src="{{ asset('images/' . $slide['image']) }}" class="w-full h-full object-cover rounded-lg">
            </div>
        @endforeach
    </div>
</div>
