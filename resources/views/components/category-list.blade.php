<div class="relative overflow-x-hidden">
    <x-wrapper>
        <div class="main-carousel scroll-px-8 snap-x snap-mandatory w-full flex flex-nowrap relative w-[140%] pl-2 pr-24 lg:pr-44 space-x-6 -ml-5 overflow-x-scroll">
            @foreach($categories[0]->children as $category)
                @foreach($category->products as $product)
                    <x-product.card :$product :$category
                                    class="min-w-[300px] touch-pan-x snap-always snap-start transition-all flex-1 my-10 w-1/2 md:w-1/4 block carousel-cell"/>
                @endforeach
            @endforeach
        </div>
    </x-wrapper>
</div>
