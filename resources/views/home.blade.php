<x-site-layout>
    <x-hero>
        <x-title class="text-black  ">
             Best Selection of Blinds<br/> at Affordable Prices
        </x-title>
        <x-paragraph class=" rounded-md backdrop-blur py-4 max-w-3xl">
            We offer a wide range of high-quality blinds at affordable prices. Our blinds are perfect for any room in
            the house and will add style and function to your space. We have a variety of options to choose from,
            including
            @foreach($categories->sortBy('title') as $category)
                @if($loop->last)
                     and
                @endif
                <x-link href="{{ route('category.products.index', $category->slug) }}">{{ $category->title }}</x-link>
                @if(!$loop->last), @endif
            @endforeach


            . At {{ config('app.name') }}, we believe that the installation of your blinds should be just as hassle-free
            as the purchasing process. That's why we offer professional installation services for all of our blinds.
        </x-paragraph>

        <x-btn-link href="{{ route('categories.index') }}" >VIEW ALL PRODUCTS</x-btn-link>
    </x-hero>




</x-site-layout>
