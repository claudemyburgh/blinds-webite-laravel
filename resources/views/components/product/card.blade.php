<div class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden hover:shadow-md transition-all">
    <div class="aspect-square bg-gray-200 group-hover:opacity-75 border-b border-gray-200">
        <img src="{{ $product->getFirstMediaUrl('default', 'medium') }}"
             alt="{{ $product->title }}"
             class="w-full h-full object-center object-cover sm:w-full sm:h-full">
    </div>
    <div class="flex-1 p-4 space-y-2 flex flex-col">
        <h3 class="text-sm font-medium text-gray-900">
            <a href="{{ route('category.product.show', [$category, $product]) }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $product->title }}
            </a>
        </h3>

        @if($product->excerpt || $product->description)
            <p class="text-gray-500 line-clamp-2">
                {{ $product->excerpt ?? $product->description }}
            </p>
        @endif
    </div>
</div>
