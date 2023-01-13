<x-site-layout>

    <x-wrapper size="none" class="pt-28 2xl:pt-36">
        <x-title>Categories</x-title>
        <x-prose class="my-6">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque commodi cumque deserunt dolorem dolores est expedita, incidunt ipsum iste laudantium neque nesciunt, quam quod sit suscipit velit vitae voluptatibus.</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque commodi cumque deserunt dolorem dolores est expedita, incidunt ipsum iste laudantium neque nesciunt, quam quod sit suscipit velit vitae voluptatibus.</p>
        </x-prose>
    </x-wrapper>


    <x-wrapper size="md" class="grid grid-cols-4 gap-8">
        @foreach($categories as $category)
            <div>
                <a href="{{ route('category.products.index', $category->slug) }}">
                    <img class="aspect-square mb-2 rounded-md bg-gray-100 border border-gray-300 hover:shadow-md transition-all hover:shadow-primary-600/30 hover:scale-110 transition hover:-translate-y-4" height="500" width="500" loading="lazy"  src="{{ $category->getFirstMediaUrl('default', 'medium') }}" alt="Image for {{ $category->title }}">
                </a>
                    <x-link href="{{ route('category.products.index', $category->slug) }}">
                        <x-title type="h3">{{ $category->title }}</x-title>
                    </x-link>
            </div>

        @endforeach

    </x-wrapper>

</x-site-layout>
