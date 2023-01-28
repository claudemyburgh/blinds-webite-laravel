<x-site-layout>
    <x-wrapper size="xl">
        <div class="relative">
                <x-title>Catalog</x-title>
                <x-prose class="my-4">
                    <p>
                        We are excited to offer you a wide variety of products to choose from. We have put in a lot of
                        effort to curate a diverse range of products to cater to different needs and preferences
                    </p>
                    <p>
                        We understand that it can be overwhelming to browse through a long list of products, so we have
                        made
                        it easy for you to find what you're looking for by organizing our products into different
                        categories. You can also use the search bar to narrow down your options.
                    </p>
                    <p>
                        We take great pride in our selection of products and are confident that you will find something
                        you'll love. Our team is always working hard to bring you the latest and greatest products, so
                        be
                        sure to check back often.
                    </p>
                </x-prose>
        </div>

    </x-wrapper>

    <x-wrapper>
        <div class="grid grid-cols-2 gap-4">
            @foreach($categories as $category)
                <div>
                    <a href="{{ route('category.products.index', $category->slug) }}">
                        <img
                            class="aspect-square mb-2 w-full rounded-md bg-gray-100 border border-gray-300 hover:shadow-md transition-all hover:shadow-primary-600/30 hover:scale-110 transition hover:-translate-y-4"
                            height="500" width="500" loading="lazy"
                            src="{{ $category->getFirstMediaUrl('default', 'medium') }}"
                            alt="Image for {{ $category->title }}">
                    </a>
                    <x-link href="{{ route('category.products.index', $category->slug) }}">
                        <x-title type="h3">{{ $category->title }}</x-title>
                    </x-link>
                </div>
            @endforeach
        </div>
    </x-wrapper>


</x-site-layout>
