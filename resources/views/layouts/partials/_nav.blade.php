<headless-navigation role="navigation" class="bg-white fixed inset-x-0 top-0 block shadow-sm shadow-black/30 z-100">
    <div class="wrapper">
        <div class="flex items-center justify-between h-16 md:h-20">
            <div class="flex flex-1 items-center justify-between px-2 lg:px-0">
                <a href="{{ config('app.url') }}" class="flex-shrink-0 text-2xl font-bold">
                    @include('layouts.partials._logo')
                    <span class="sr-only">{{ config('app.name') }}</span>
                </a>
                <div class="hidden lg:block lg:ml-6">
                    <div class="flex space-x-4">
                        <a href="{{ route('home') }}"
                           @if( request()->routeIs('home')) aria-current="true" @endif
                            @class([
                            'px-5 py-2.5 rounded-md text-base font-medium',
                            'text-gray-900 hover:bg-primary-500 hover:text-white' => !request()->routeIs('home'),
                            'bg-primary-500 text-white' => request()->routeIs('home')
                            ])>Home
                        </a>
                        <headless-popover class="block">
                            <button type="button"
                                    @class([
                                    'px-5 py-2.5 rounded-md text-base font-medium flex items-center',
                                    'text-gray-900 hover:bg-primary-500 hover:text-white' => !request()->routeIs('categor*'),
                                    'bg-primary-500 text-white' => request()->routeIs('categor*')

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
                                <x-wrapper class="grid grid-cols-4 gap-4">
                                    <div class="col-span-4 border-b border-gray-100">
                                        <a href="{{ route('categories.index') }}"
                                           class="inline-flex space-x-px items-center font-semibold text-xl ">
                                            <span>Catalog</span>
                                            <span aria-hidden="true">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                     stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                                                  <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"/>
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                    @foreach($categories as $category)
                                        <ul class="list-disc list-outside pl-5">
                                            <li>
                                                <a href="{{ route('category.products.index', $category) }}">{{ $category->title }}</a>
                                                @if($category->children)
                                                    <ul class="list-disc list-outside pl-4 ">
                                                        @foreach($category->children as $child)
                                                            <li>
                                                                <a href="{{ route('category.products.index', $child) }}">{{ $child->title }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        </ul>
                                    @endforeach

                                </x-wrapper>
                            </div>
                        </headless-popover>

                        <a href="{{ route('contact-us') }}"
                           @if( request()->routeIs('contact-us')) aria-current="true" @endif
                            @class([
                            'px-5 py-2.5 rounded-md text-base font-medium',
                            'text-gray-900 hover:bg-primary-500 hover:text-white' => !request()->routeIs('contact-us'),
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

            <a href="{{ route('home') }}"
               @if( request()->routeIs('home')) aria-current="true" @endif
                @class([
                'px-3 py-2 block rounded-md text-base font-medium',
                'text-gray-900 hover:bg-primary-500 hover:text-white' => !request()->routeIs('home'),
                'bg-primary-500 text-white' => request()->routeIs('home')
                ])>Home
            </a>

            <a href="{{ route('categories.index') }}"
               @if( request()->routeIs('categor*')) aria-current="true" @endif
                @class([
                'px-3 py-2 block rounded-md text-base font-medium',
                'text-gray-900 hover:bg-primary-500 hover:text-white' => !request()->routeIs('categor*'),
                'bg-primary-500 text-white' => request()->routeIs('categor*')
                ])>Catalog
            </a>

            <a href="{{ route('contact-us') }}"
               @if( request()->routeIs('contact-us')) aria-current="true" @endif
                @class([
                'px-3 py-2 block rounded-md text-base font-medium',
                'text-gray-900 hover:bg-primary-500 hover:text-white' => !request()->routeIs('contact-us'),
                'bg-primary-500 text-white' => request()->routeIs('contact-us')
                ])>Contact Us
            </a>

        </div>
    </div>
</headless-navigation>
