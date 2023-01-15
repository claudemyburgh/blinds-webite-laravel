<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Categories</h1>
    </x-slot:header>

     @include('layouts.dashboard.partials._form_sessions')


    <div class="p-4 bg-gray-800 rounded-md text-gray-50">

        <div class="flex space-x-4 mb-4 flex justify-end">
            <a class="border border-primary-600 text-primary-600 hover:bg-primary-600/20 rounded-md  px-3 py-1.5" href="{{ route('dashboard.categories.create') }}">Create Category</a>
        </div>

        <ul>
            @foreach($categories as $category)
                <li><a class="hover:underline" href="{{ route('dashboard.categories.edit', $category) }}">{{ $category->title }}</a></li>
            @endforeach
        </ul>


    </div>

</x-app-layout>
