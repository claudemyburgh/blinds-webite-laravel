<x-site-layout>

    <x-wrapper size="none" class="pt-28 2xl:pt-36 grid md:grid-cols-2 gap-8">
        <div class="grid grid-cols-4 gap-2 md:gap-4">

            <img class="aspect-square col-span-4 rounded-md w-full bg-gray-100 border border-gray-400"
                 src="{{ $product->getFirstMediaUrl('default', 'thumb') }}"
                 alt="{{ $product->title }} featured image">

            <img class="aspect-square rounded-md w-full bg-gray-100 border border-gray-400"
                         src="{{ $product->getFirstMediaUrl('default', 'thumb') }}"
                         alt="{{ $product->title }} featured image">

            <img class="aspect-square rounded-md w-full bg-gray-100 border border-gray-400"
                         src="{{ $product->getFirstMediaUrl('default', 'thumb') }}"
                         alt="{{ $product->title }} featured image">

            <img class="aspect-square rounded-md w-full bg-gray-100 border border-gray-400"
                         src="{{ $product->getFirstMediaUrl('default', 'thumb') }}"
                         alt="{{ $product->title }} featured image">

            <img class="aspect-square rounded-md w-full bg-gray-100 border border-gray-400"
                         src="{{ $product->getFirstMediaUrl('default', 'thumb') }}"
                         alt="{{ $product->title }} featured image">

        </div>
        <div>
            <x-title>{{ $product->title }}</x-title>
            <a href="{{ route('category.products.index', $category) }}"
               class="text-gray-400 mt-2 inline-flex text-xs px-3 py-[3px] bg-gray-100 border border-gray-200 rounded-full hover:text-primary-600 hover:border-primary-600">In
                category {{ $category->title }}</a>


            <x-paragraph>
                {{ $product->description }}
            </x-paragraph>
            <x-product.table :$product></x-product.table>
        </div>
    </x-wrapper>


</x-site-layout>
