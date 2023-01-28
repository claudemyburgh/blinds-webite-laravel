<x-site-layout>

    <x-wrapper size="none" class="pt-28 2xl:pt-36 grid md:grid-cols-2 gap-8">
        <div>
            <image-swap class="grid grid-cols-4 gap-2 md:gap-4 relative">
                <button data-image-reset class="border absolute bg-white/70 backdrop-blur shadow top-3 hidden items-center justify-center left-3 border-gray-300 hover:bg-gray-100 text-gray-600 rounded-md w-12 h-12" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                    </svg>
                </button>


                <img id="main-product-image" data-image="main"
                     class="aspect-square col-span-4 rounded-md w-full bg-gray-100 border border-gray-400"
                     src="{{ $product->getFirstMediaUrl('default', 'normal') }}"
                     alt="{{ $product->title }} featured image">

                @if($product->media->count() > 1)
                    @foreach($product->media as $media)
                        <button type="button" data-image-url="{{ $media->getFullUrl('normal') }}">
                            <img
                                class="aspect-square rounded-md w-full bg-gray-100 border border-gray-400 pointer-events-none"
                                src="{{ $media->getFullUrl('thumb') }}"
                                alt="{{ $product->title }} featured image">
                        </button>
                    @endforeach
                @endif

                @if($product->variants->count())
                    @foreach($product->variants as $variant)
                        <button type="button" data-image-url="{{ $variant->getFirstMediaUrl('variant', 'large') }}">
                            <img
                                class="aspect-square rounded-md w-full bg-gray-100 border border-gray-400 pointer-events-none"
                                src="{{ $variant->getFirstMediaUrl('variant', 'small')}}"
                                alt="{{ $variant->sku }} {{ $variant->colour }}">
                        </button>
                    @endforeach
                @endif

            </image-swap>
        </div>
        <div>
            <x-title>{{ $product->title }}</x-title>
            <a href="{{ route('category.products.index', $category) }}"
               class="text-gray-400 mt-2 inline-flex text-xs px-3 py-[3px] bg-gray-100 border border-gray-200 rounded-full hover:text-primary-600 hover:border-primary-600">In
                category {{ $category->title }}</a>
            <x-paragraph>
                {{ $product->description }}
            </x-paragraph>
            <x-product.table :variants="$product->variants" :$product></x-product.table>

            <div id="contact-form" data-product-title="{{$product->title}}" class="my-6"></div>
        </div>
    </x-wrapper>
</x-site-layout>
