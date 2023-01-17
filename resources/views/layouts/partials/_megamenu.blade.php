<x-wrapper class="space-y-4">
    <div class="flex-1 w-full">
        <a href="{{ route('categories.index') }}"
           class="inline-flex space-x-px items-center font-semibold text-xl ">
            <span>Catalog</span>
            <span aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"/>
                </svg>
            </span>
        </a>
    </div>

    <div class="flex gap-4">
        <div class="grid  grid-cols-3 gap-4 w-2/3">
            @foreach($categories[0]->children as $category)
                <a href="{{ route('category.products.index', $category) }}" @class([
                        'border border-gray-300 rounded-md p-2 hover:bg-primary-500 hover:text-primary-50 flex',
                        'bg-primary-500 text-primary-50 items-center' => request()->segment(2) === $category->slug
                    ])>
                    <img
                        class="h-12 w-12 rounded-md block mr-2 shrink-0 border border-gray-300"
                        src="{{ $category->getFirstMediaUrl('default', 'thumb') }}" alt="{{ $category->titile }}">
                        <div class="flex items-center ">
                            {{ $category->title }}
                        </div>
                </a>
            @endforeach
        </div>
        <a href="{{ route('category.products.index', 'motion-blinds') }}" class="border w-1/3 block border-gray-300 rounded-md p-2 hover:bg-gray-100 relative overflow-hidden">

            <div aria-hidden="true" class="h-40 w-40 left-[33%] top-[30%] pointer-events-none absolute">
                <div class="pulse pulse-1 w-full h-full"></div>
                <div class="pulse pulse-2 w-full h-full"></div>
                <div class="pulse pulse-3 w-full h-full"></div>
                <div class="pulse pulse-4 w-full h-full"></div>
                <div class="pulse pulse-5 w-full h-full"></div>
                <div class="pulse pulse-6 w-full h-full"></div>
            </div>

            <div class="absolute z-10 bottom-3 right-3 w-44 p-2 bg-white/70 rounded-md">
                <img
                    class="w-full"
                    loading="lazy" width="500" height="154" src="{{ Vite::asset('resources/img/Powered-by-MotionBlinds.png') }}" alt="Motion Blinds logo">
            </div>
            <img class="w-full h-full object-cover" loading="lazy" width="500" height="375" src="{{ Vite::asset('resources/img/motion.jpeg') }}" alt="Motion">
        </a>

    </div>


</x-wrapper>
