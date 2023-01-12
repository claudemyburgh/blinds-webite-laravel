<headless-navigation role="navigation" class="bg-white fixed inset-x-0 top-0 block shadow-sm shadow-black/30 z-100">
    <div class="wrapper">
        <div class="flex items-center justify-between h-20">
            <div class="flex flex-1 items-center justify-between px-2 lg:px-0">
                <a href="{{ config('app.url') }}" class="flex-shrink-0  text-2xl font-bold">
                    @include('layouts.partials._logo')
                    <span class="sr-only">{{ config('app.name') }}</span>
                </a>
                <div class="hidden lg:block lg:ml-6">
                    <div class="flex space-x-4">

                        <a href="{{ route('home') }}"
                           @if( request()->routeIs('home')) aria-current="true" @endif
                            @class([
                            'text-gray-900 hover:bg-primary-500 hover:text-white px-5 py-2.5 rounded-md text-base font-medium',
                            'bg-primary-500 text-white' => request()->routeIs('home')
                            ])>Home
                        </a>
                        <headless-popover>
                            <button type="button"
                                    @class([
                                    'text-gray-900 hover:bg-primary-500 flex items-center hover:text-white px-5 py-2.5 rounded-md text-base font-medium',
                                    'bg-primary-500 text-white' => request()->routeIs('categories*')
                                    ])
                                    id="products-links"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                            >
                                <span>
                                    Products
                                </span>
                                <span aria-hidden="true" class="ml-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                      <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                    </svg>
                                </span>
                            </button>
                            <div aria-labelledby="products-links" hidden
                                 class="absolute bg-white inset-x-0 py-4 top-full shadow-lg border-t border-b border-gray-300">
                                <x-wrapper class="grid grid-cols-3 gap-4">
                                    <div class="col-span-4 border-b border-gray-100">
                                        <a href="{{ route('categories.index') }}"
                                           class="inline-flex space-x-px items-center font-semibold text-xl ">
                                            <span>Categories</span>
                                            <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>


                                    @foreach($categories->take(2) as $category)
                                        <div class="p-4 rounded-md bg-white aspect-square space-y-1.5">
                                            <x-link href="#">
                                                <x-title type="h3">{{ $category->title }}</x-title>
                                            </x-link>

                                            @if( $category->depth === 0)
                                                <ul class="list-disc marker:text-primary-600 marker:text-xl list-outside pl-4 space-y-1.5 ">
                                                    @foreach($category->children as  $child)
                                                        <li class="flex justify-between items-center" >
                                                            <x-link href="{{ route('category.products.index', $child) }}">
                                                                <x-title type="h4">{{ $child->title }}</x-title>
                                                            </x-link>

                                                            @if($child->isPopular())
                                                                <small class="border border-sky-500 bg-sky-100 rounded-full px-1 text-xs text-sky-500 inline-flex items-center space-x-1">
                                                                    <span>Most Popular</span>
                                                                </small>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif

                                        </div>
                                    @endforeach
                                    <div class="p-4 rounded-md bg-gray-200 aspect-square"></div>
                                    <div class="aspect-square grid grid-rows-2 grid-cols-2 gap-4">
                                        @foreach($categories->take(4) as $category)
                                            <a href="#"
                                               class="rounded-md bg-gray-200 aspect-square overflow-hidden border border-gray-300 hover:shadow-md transition-shadow hover:shadow-primary-600/30">
                                                <img class="hover:scale-110 transition-transform " src="{{ $category->getFirstMediaUrl('default', 'thumb') }}"
                                                     alt="{{ $category->title }}">
                                            </a>
                                        @endforeach
                                    </div>
                                </x-wrapper>
                            </div>
                        </headless-popover>

                        <a href="{{ route('about-us') }}"
                           @if( request()->routeIs('about-us')) aria-current="true" @endif
                            @class([
                            'text-gray-900 hover:bg-primary-500 hover:text-white px-5 py-2.5 rounded-md text-base font-medium',
                            'bg-primary-500 text-white' => request()->routeIs('about-us')
                            ])>About Us</a>

                        <a href="{{ route('contact-us') }}"
                           @if( request()->routeIs('contact-us')) aria-current="true" @endif
                            @class([
                            'text-gray-900 hover:bg-primary-500 hover:text-white px-5 py-2.5 rounded-md text-base font-medium',
                            'bg-primary-500 text-white' => request()->routeIs('contact-us')
                            ])>Contact Us</a>

                    </div>
                </div>
            </div>

            <div class="flex lg:hidden">
                <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div hidden class="lg:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="#"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
    </div>
</headless-navigation>
