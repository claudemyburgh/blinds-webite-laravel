<div class="relative overflow-x-hidden pl-4 category-list-component">
    <x-wrapper>
        <div class="flex flex-1 space-x-6 whitespace-nowrap">
            @foreach($categories[0]->children as $category)
                @foreach($category->products as $product)
                    <x-product.card :$product :$category
                                    class="min-w-[300px]  my-10 block carousel-cell product-card"/>
                @endforeach
            @endforeach
        </div>
    </x-wrapper>
</div>
