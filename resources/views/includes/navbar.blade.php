<nav class="sticky top-0 z-50">
    <div class="w-full bg-primarybase h-8 flex justify-center items-center">
        <div class="">
            <p class="text-white font-medium text-sm">Wujudukan properti idealmu bersama properti ideal! 🏠</p>
        </div>
    </div>
    <div
        class="bg-white border-b border-gray-200 text-white py-2 items-center flex flex-wrap px-4 md:px-10 md:flex md:items-center md:justify-between justify-start">
        <div class="pl-4 md:pl-0">
            <a href="/" class="flex flex-wrap gap-x-2 items-center">
                <img class="rounded-lg w-7 md:w-7" src="{{ asset('img/icons/properti-ideal-icon.png') }}"
                    alt="efarm logo" />
                <p class="text-primarybase font-bold text-xl hidden lg:visible lg:flex">Properti Ideal</p>
            </a>
        </div>

        <div class="flex justify-center md:justify-start md:w-auto items-center md:items-center">
            <div class="md:visible sm:visible md:flex md:mr-0">
                <div x-data="{ isOpen: false }">
                    <button @click="isOpen = !isOpen"
                        class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 hover:ring-1 hover:ring-primarybase">
                        <div class="relative hidden sm:visible md:visible lg:visible md:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                width="24px" fill="#444444">
                                <path
                                    d="M80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q127 0 226.5 70T851-629q7 17 .5 34T828-572q-16 5-30.5-3T777-599q-24-60-69-106t-108-71v16q0 33-23.5 56.5T520-680h-80v80q0 17-11.5 28.5T400-560h-80v80h40q17 0 28.5 11.5T400-440v80h-40L168-552q-3 18-5.5 36t-2.5 36q0 122 80.5 213T443-162q16 2 26.5 13.5T480-120q0 17-11.5 28.5T441-82Q288-97 184-210T80-480Zm736 352L716-228q-21 12-45 20t-51 8q-75 0-127.5-52.5T440-380q0-75 52.5-127.5T620-560q75 0 127.5 52.5T800-380q0 27-8 51t-20 45l100 100q11 11 11 28t-11 28q-11 11-28 11t-28-11ZM620-280q42 0 71-29t29-71q0-42-29-71t-71-29q-42 0-71 29t-29 71q0 42 29 71t71 29Z" />
                            </svg>
                        </div>
                        <span class="font-semibold whitespace-nowrap text-textbase">
                            Layanan
                        </span>
                    </button>

                    <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                        x-show.transition.opacity="isOpen"
                        class="absolute mt-3 transform bg-white rounded-md shadow-lg  min-w-max">
                        <ul class="flex flex-col ">
                            <li class=" rounded-t-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                <a href="{{ route('pages.services.propertiideal') }}"
                                    class="flex items-start px-4 py-2 space-x-2 rounded-md ">
                                    <div class="items-center flex">
                                        <img src="{{ asset('icons/properti-ideal-services.png') }}" alt="montaña"
                                            class="h-5 mr-4" />
                                        <span class="flex flex-col ">
                                            <span class="text-textbase text-lg font-semibold ">Properti Ideal</span>
                                            <span class="text-textbase text-sm ">Jual beli properti</span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class=" cursor-pointer hover:ring-1 hover:ring-primarybase">
                                <a href="{{ route('pages.services.propertisolution') }}"
                                    class="flex items-start px-4 py-2 space-x-2 ">
                                    <div class="items-center flex ">
                                        <img src="{{ asset('icons/properti-solution.png') }}" alt="montaña" class="h-5 mr-4" />
                                        <span class="flex flex-col">
                                            <span class="text-textbase text-lg font-semibold ">Properti Solution</span>
                                            <span class="text-textbase text-sm ">Solusi properti Anda</span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <a href="{{ route('pages.services') }}" class="">
                            <div
                                class="p-4 text-lg font-medium border-t  rounded-b-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                <div class="items-center flex">
                                    <img src="{{ asset('icons/properti-service.png') }}" alt="montaña" class="h-5 mr-4" />
                                    <span class="flex flex-col">
                                        <span class="text-textbase text-lg font-semibold ">Semua
                                            layanan</span>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="md:flex md:visible ml-6">
                <a href="/"
                    class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6 hidden md:flex">Beranda</a>
                <a href="{{ route('pages.sell') }}"
                    class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Jual</a>
                <a href="{{ route('pages.buy') }}"
                    class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Beli</a>
                <a href="{{ route('pages.rental') }}"
                    class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Sewa</a>
                <a href="{{ route('pages.about') }}"
                    class="text-sm px-1 font-medium text-textbase md:text-lg md:font-semibold md:ml-6">Tentang</a>
            </div>


        </div>
        <div class="flex flex-wrap">
            @if (Auth::check() && Auth::user()->role == 'Customer')
                <div class="md:visible sm:visible md:flex pl-10">
                    <div x-data="{ isOpen: false }">
                        <button @click="isOpen = !isOpen"
                            class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-4 ring-1 ring-primarybase">
                            <div class="relative">
                                @if (auth()->user()->foto_profile == 'user.png')
                                <img class="relative inline-block h-6 w-6 rounded-full object-cover object-center"
                                    alt="Image placeholder" src="{{ asset('img/person_1.jpg') }}" />
                                @else
                                <img class="relative inline-block h-6 w-6 rounded-full object-cover object-center"
                                    alt="Image placeholder" src="/uploads/{{ auth()->user()->foto_profile }}" />
                                @endif
                            </div>
                            <span class="font-semibold whitespace-nowrap text-textbase">
                                {{ auth()->user()->nama }}
                            </span>
                        </button>

                        <div @click.away="isOpen = false" @keydown.escape="isOpen = false"
                            x-show.transition.opacity="isOpen"
                            class="absolute mt-3 transform bg-white rounded-md shadow-lg  min-w-max">
                            <ul class="flex flex-col ">
                                <li class=" rounded-t-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                    <a href="{{ route('profile.customer') }}"
                                        class="flex items-start px-4 py-2 space-x-2 rounded-md ">
                                        <div class="items-center flex">
                                            <img src="{{ asset('icons/properti-ideal-services.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col ">
                                                <span class="text-textbase text-lg font-semibold ">Akun</span>
                                                <span class="text-textbase text-sm ">Kelola akun</span>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                                {{-- <li class=" rounded-t-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                    <a href="{{ route('profile.customer.wishlist') }}"
                                        class="flex items-start px-4 py-2 space-x-2 rounded-md ">
                                        <div class="items-center flex">
                                            <img src="{{ asset('icons/properti-ideal-services.png') }}" alt="montaña"
                                                class="h-5 mr-4" />
                                            <span class="flex flex-col ">
                                                <span class="text-textbase text-lg font-semibold ">Wishlist</span>
                                                <span class="text-textbase text-sm ">Kelola wishlist</span>
                                            </span>
                                        </div>
                                    </a>
                                </li> --}}
                            </ul>
                            <a href="{{ route('pages.customer.logout') }}" class="">
                                <div
                                    class="p-4 text-lg font-medium border-t rounded-b-md cursor-pointer hover:ring-1 hover:ring-primarybase">
                                    <div class="items-center flex gap-x-3 justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960"
                                            width="24px" fill="#444444">
                                            <path
                                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z" />
                                        </svg>
                                        <span class="flex flex-col">
                                            <span class="text-textbase text-lg font-semibold ">Logout</span>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- <a href="{{ route('pages.customer.logout') }}"
                    class="flex cursor-pointer items-center gap-x-3 rounded-md py-2 px-3 ml-4 hover:bg-gray-100 md:flex-wrap md:flex">
                    <div class="relative flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960"
                            width="24">
                            <path
                                d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h240q17 0 28.5 11.5T480-800q0 17-11.5 28.5T440-760H200v560h240q17 0 28.5 11.5T480-160q0 17-11.5 28.5T440-120H200Zm487-320H400q-17 0-28.5-11.5T360-480q0-17 11.5-28.5T400-520h287l-75-75q-11-11-11-27t11-28q11-12 28-12.5t29 11.5l143 143q12 12 12 28t-12 28L669-309q-12 12-28.5 11.5T612-310q-11-12-10.5-28.5T613-366l74-74Z" />
                        </svg>
                        <span class="font-semibold text-textbase ml-2 hidden md:flex md:visible">Logout</span>
                    </div>
                </a> --}}
            @else
                <div class="hidden md:visible md:flex">
                    <a href="{{ route('pages.customer.login') }}"
                        class="px-7 mx-2 py-2 ring-1 rounded-md ring-primarybase text-sm text-primarybase font-semibold hover:bg-primarybase hover:text-white">Masuk</a>
                    <a href="{{ route('pages.customer.register') }}"
                        class="px-7 mx-2 py-2 ring-1 rounded-md ring-primarybase text-sm text-white bg-primarybase font-semibold hover:bg-white hover:text-primarybase">Daftar</a>
                </div>
            @endif
        </div>

        <button id="menuBtn" class="md:hidden">
            <i class="fas fa-bars text-gray-500 text-lg"></i>
        </button>
    </div>
</nav>
