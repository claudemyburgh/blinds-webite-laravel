<x-site-layout>

    <x-hero>
        <x-title>{{ $category->title }}</x-title>
        @if($category->description)
        <x-paragraph class="rounded-md backdrop-blur py-4 max-w-2xl">
            {{ $category->description }}
        </x-paragraph>
        @endif
        <x-slot:image-url>{{ $category->getFirstMediaUrl('default', 'large') }}</x-slot:image-url>
    </x-hero>

    <x-wrapper class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6 lg:grid-cols-4" size="none">
        @foreach($category->products as $product)
            <a href="{{ route('category.product.show', [$category, $product]) }}" class="relative group flex p-4 bg-gray-200 border border-gray-400 rounded-md  aspect-square overflow-hidden flex-shrink-0">
                <img height="300" width="300" class="group-hover:scale-110 shadow-lg transition-transform w-full h-full absolute inset-0 object-cover" src="{{ $product->getFirstMediaUrl('default', 'medium') }}" alt="{{ $product->title }} background image">

            </a>
        @endforeach
    </x-wrapper>



</x-site-layout>
