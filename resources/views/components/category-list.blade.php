<div>

    <x-wrapper class="my-24 ">
        <div class="snap-x snap-mandatory overflow-y-hidden w-[115%]">
            <div class="flex flex-nowrap gap-4 py-12 px-4">
                @foreach($categories[0]->children as $category)
                    @foreach($category->products as $product)
                         <x-product.card :$product :$category class="min-w-[300px] snap-center draggable"/>
                    @endforeach
                @endforeach
            </div>
        </div>
    </x-wrapper>

</div>
