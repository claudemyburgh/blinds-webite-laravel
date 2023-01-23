<div>

    <x-wrapper class="my-24">

        <div class="flex flex-nowrap gap-4 overflow-y-hidden min-w-[150%] py-12 px-4">
            @foreach($categories[0]->children as $category)
                @foreach($category->products as $product)
                     <x-product.card :$product :$category class="min-w-[300px] hover:z-20 hover:scale-110 transition-transform"/>
                @endforeach
            @endforeach
        </div>

    </x-wrapper>

</div>
