<x-site-layout>

    <x-wrapper size="none" class="pt-28 2xl:pt-36">
        <x-title>{{ $category->title }}</x-title>
        @if($category->description)
            <x-prose class="mt-6">
                {!! $category->description !!}
            </x-prose>
        @endif
    </x-wrapper>

    {{ $category->products }}

</x-site-layout>
