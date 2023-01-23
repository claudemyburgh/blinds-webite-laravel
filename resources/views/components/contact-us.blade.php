<div class="bg-gray-900 text-gray-50 py-24 relative mt-24">
    <div aria-hidden="true" class="absolute w-1/2 h-1/2 bg-gradient-to-br from-violet-500/30 blur-3xl to-transparent top-0 "></div>
    <div aria-hidden="true" class="absolute w-1/2 h-1/2 bg-gradient-to-br from-sky-500/30 blur-3xl to-transparent bottom-0 right-0 "></div>

    <x-wrapper>
        <div class="grid md:grid-cols-2 gap-4 md:gap-6 lg:gap-8 max-w-full">
            <div>
                <x-title>Contact Us</x-title>
                <x-paragraph class="max-w-xl">
                    Don't just sit there twiddling your thumbs, give us a call! Our team of experts are standing by,
                    eagerly waiting to answer all of your burning questions. And if you don't have any questions,
                    well... they'll make some up just to chat with you. So don't be shy, give us a ring-a-ding-ding
                </x-paragraph>
            </div>

            <div class="grid grid-rows-2 gap-4 md:gap-6 lg:gap-8">
                @foreach($users as $user)
                    <div class="border border-primary-500 bg-gray-900 rounded-md relative flex gap-4 md:gap-6 lg:gap-8 even:translate-x-12 shadow-lg shadow-secondary-500/10">
                        <div aria-hidden="true"
                             class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-white/10 to-transparent pointer-events-none"></div>
                        <div class="aspect-square w-32 bg-gradient-to-tr from-primary-500 to-secondary-300 user-clip rounded-md rotate-12">

                        </div>
                        <div class="space-y-1 p-4">
                            <x-title type="h3">{{ $user['name'] }}</x-title>
                            <x-paragraph><x-link class="text-white" href="mailto:{{ $user['email'] }}">{{ $user['email'] }}</x-link></x-paragraph>
                            <x-paragraph>
                                <x-link href="tel:{{ $user['phone']['plain'] }}" class="text-white">{{ $user['phone']['formatted'] }}</x-link>    </x-paragraph>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </x-wrapper>


</div>
