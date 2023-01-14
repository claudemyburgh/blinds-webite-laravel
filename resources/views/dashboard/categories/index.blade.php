<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Categories</h1>
    </x-slot:header>


    <div class="p-4 bg-gray-800 rounded-md text-gray-50">
        <ul>
            @foreach($categories as $category)
                <li><a class="hover:underline" href="{{ route('dashboard.categories.update', $category) }}">{{ $category->title }}</a></li>
            @endforeach
        </ul>


    </div>

</x-app-layout>
