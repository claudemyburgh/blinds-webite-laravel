<div>

    <x-wrapper class="my-24">

    @foreach($categories as $category)
        <ul class="list-outside list-disc">
            <li>
                <x-link href="{{ route('category.products.index', $category) }}">
                    {{ $category->title }}
                </x-link>
                <ul class="list-outside list-disc ml-3">
                    @foreach($category->children as $child)
                        <li>
                            <x-link href="{{  route('category.products.index', $child) }}">{{ $child->title }}</x-link>
                        </li>
                    @endforeach
                </ul>
            </li>
        </ul>
    @endforeach

    </x-wrapper>

</div>
