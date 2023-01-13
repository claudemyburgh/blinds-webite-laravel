<x-site-layout>

    <x-hero imageUrl="{{ Vite::asset('resources/img/' . $category->slug . '.jpg') }}">
        <x-title>{{ $category->title }}</x-title>
        @if($category->description)
        <x-paragraph class="rounded-md backdrop-blur py-4 max-w-2xl">
            {{ $category->description }}
        </x-paragraph>
        @endif
    </x-hero>

    <x-wrapper class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 lg:grid-cols-4" size="none">
        @foreach($category->products as $product)
            <a href="{{ route('category.product.show', [$category, $product]) }}" class="relative group flex p-4 bg-gray-200 border border-gray-400 rounded-md  aspect-square overflow-hidden flex-shrink-0">
                <img height="300" width="300" class="group-hover:scale-110 shadow-lg transition-transform w-full h-full absolute inset-0 object-cover" src="{{ $product->getFirstMediaUrl('default', 'medium') }}" alt="{{ $product->title }} background image">

                <div aria-hidden="true" class="h-1/2 w-full bg-gradient-to-b from-transparent to-black/80 block inset-x-0 bottom-0 absolute translate-y-0 transition-transform group-hover:translate-y-full">
                    <div class="relative flex items-end  text-shadow z-10 text-white font-bold text-2xl">
                        <div>
                            {{ $product->title }}
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </x-wrapper>



</x-site-layout>
