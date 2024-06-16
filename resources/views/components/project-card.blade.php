<div class="bg-white shadow-lg rounded-lg overflow-hidden">

    @if($image)
    <img class="w-full object-cover object-center" src="{{ $image }}" alt="{{ $title }}" />
    @endif

    <div class="flex flex-col gap-2 p-6">
        <h2 class="text-md font-semibold mb-2">{{ $title }}</h2>

        @if(!empty($techStack))
        <div class="flex flex-wrap">
            @foreach ($techStack as $item)
            <span class="text-sm bg-black text-white rounded-sm px-2 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
                {{ $item }}
            </span>
            @endforeach
        </div>
        @endif

        <p class="text-gray-700 mb-4">{{ $desc }}</p>
    </div>

    <footer class="flex flex-row-reverse pr-5 pb-5">
        @if($link)
        <button class="bg-black text-white font-semibold py-2 px-4 rounded hover:bg-gray-900">
            {{ $type == 'writing' ? 'Continue Reading' : 'View Source Code' }}
        </button>
        @endif
    </footer>

</div>
