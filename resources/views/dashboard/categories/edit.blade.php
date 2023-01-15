<x-app-layout>
    <x-slot:header>
        <div class="flex justify-between">
            <h1 class="text-2xl font-bold text-gray-400">Categories Edit</h1>

            <headless-popover popper placement="bottom-end bottom-start" offset="2 10">
                <button id="delete-dropdown" aria-expanded="false" aria-haspopup="true" class="bg-gray-900 text-white px-3 py-1.5 rounded-md" type="button">DELETE</button>

                <div hidden aria-labelledby="delete-dropdown" class="bg-gray-200 rounded-md shadow-lg p-2 w-40">
                    <form action="{{ route('dashboard.categories.destroy', $category) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="bg-red-500 block w-full text-white px-3 py-1.5 rounded-md">Are you sure?</button>
                    </form>
                </div>

            </headless-popover>
        </div>


    </x-slot:header>

    <x-wrapper class="pb-24">

        <div class="p-4 bg-gray-800 rounded-md text-gray-50 max-w-3xl mx-auto">
             @include('layouts.dashboard.partials._form_sessions')
            <div class="grid grid-cols-5 gap-2">
                @foreach($category->getMedia() as $img)
                    <div class="w-32 aspect-square  bg-gray-900 rounded-md overflow-hidden group">
                        <form class="relative" action="{{ route('dashboard.categories.image-delete', $img) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="hidden group-hover:block h-5 w-5 bg-red-500 absolute top-2 right-2 rounded-full">X</button>
                        </form>
                        <img src="{{ $img->getUrl('thumb') }}" class="w-full object-cover" alt="">
                    </div>
                @endforeach
            </div>

{{--            <livewire:uploader/>--}}


            <form action="{{ route('dashboard.categories.update', $category) }}" class="text-white space-y-4" method="post" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-300">Image</label>
                    <input multiple type="file" name="image" id="image" value="{{ old('image') }}"
                        @class([
                             'mt-1 focus:ring-primary-500 focus:border-primary-500 block w-full shadow-sm sm:text-sm border-gray-700 rounded-md bg-gray-900 p-2',
                             'border-red-500' => $errors->has('image')
                             ])
                    >
                    @error('title')
                    <p class="text-red-500 mt-1 block">{{ $message }}</p>
                    @enderror
                </div>


                @include('dashboard.categories.partials._form')
                <div class="flex justify-end mt-4">
                    <button type="submit"
                            class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        Update
                    </button>
                </div>

            </form>


        </div><!--end-->

    </x-wrapper>

</x-app-layout>
