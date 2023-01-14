<x-app-layout>
    <x-slot:header>
        <h1 class="text-2xl font-bold text-gray-400">Categories Update</h1>
    </x-slot:header>


    <div class="p-4 bg-gray-800 rounded-md text-gray-50 grid grid-cols-2 gap-6">
        <div>

        <form class="space-y-4 block" action="{{ route('dashboard.categories.update', $category) }}">
            @csrf
            @method('POST')

            <div class="w-full">
                <div class="mt-4">
                    <x-input-label for="title" :value="__('Title')" />

                    <x-text-input id="title" class="block mt-1 w-full"
                                  type="text"
                                  name="title"
                                  value="{{ old('title') }}"
                                  required  />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </form>
        </div>


        <div>
            {{$category}}
        </div>

    </div>

</x-app-layout>
