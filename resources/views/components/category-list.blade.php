<div class="relative overflow-x-hidden pl-4">
    <x-wrapper>
        <div class="main-carousel scroll-px-8 snap-x snap-mandatory w-full flex flex-nowrap relative w-[140%] pl-2 pr-24 md:pr-44 space-x-6 -ml-5 overflow-x-scroll">
            @foreach($categories[0]->children as $category)
                @foreach($category->products as $product)
                    <x-product.card :$product :$category
                                    class="min-w-[200px] lg:min-w-[300px] touch-pan-x snap-always snap-start transition-all flex-1 my-10 block carousel-cell"/>
                @endforeach
            @endforeach
        </div>
    </x-wrapper>
</div>
