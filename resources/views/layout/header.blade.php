<section class="fixed w-full border-box transition-all duration-500 linear" style="
              background-image: linear-gradient(
                  to right,
                  rgba(255, 252, 250, 1),
                  rgba(255, 255, 255, 1)
              );
          ">
    <!-- Navbar -->
    <div class="header-3-2" style="font-family: 'Poppins', sans-serif">
        <header x-data="{ open: false }"
            class="w-full grid grid-cols-1 lg:grid-cols-3 py-8 lg:px-24 md:px-16 sm:px-8 px-8">
            <div class="flex items-center justify-between">
                <a href="#" class="flex items-center">
                    <img src="/image/1618636686949.png" alt="" class="" width="70" height="70" />
                    <p class="px-3 font-semibold">STIKIM | Keperawatan</p>
                </a>
                <div class="flex justify-end items-center lg:hidden cursor-pointer">
                    <svg class="w-6 h-6" @click="open = !open" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </div>
            </div>
            <!-- Backdrop -->
            <!-- Backdop -->
            <div :class="{'hidden': !open}" class="bg-black fixed hidden w-full h-full top-0 left-0 z-30 bg-opacity-60"
                @click="open = !open">
            </div>
            <nav :class="{'flex': open, 'hidden': !open}"
                class="hidden z-50 fixed left-3 right-3 rounded-md shadow-md flex-col p-8 justify-center navigation items-start lg:shadow-none lg:bg-transparent lg:p-0 lg:items-center lg:flex lg:flex-row lg:relative lg:space-x-7 bg-white">
                <a href="#" class="flex items-center m-0 lg:hidden mb-3">
                    <img src="/image/1618636686949.png" alt="" class="" width="70" height="70" />
                    <p class="px-3 font-semibold">STIKIM | Keperawatan</p>
                </a>
                @if (Route::has('login'))
                    @auth
                        <a href="#"
                            class="text-sm text-black-1 font-medium mx-0 lg:mx-5 my-4 lg:hidden lg:my-0 relative">{{ Auth::user()->nama_lengkap }}</a>
                        <a href="{{ url('/home') }}"
                            class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Home</a>
                        <a href="{{ url('/evaluasi') }}"
                            class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Evaluasi</a>
                        <a href="{{ url('/rating') }}"
                            class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Ratings & Reviews</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <input type="submit" value="Logout"
                                class="text-sm bg-white text-black-2 font-light mx-0 lg:hidden lg:mx-5 my-4 lg:my-0 relative">


                        </form>
                        {{-- <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Pricing</a>
                <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Blog</a> --}}
                    @else

                    @endauth
                @endif

                @if (Route::has('login'))
                    @auth

                    @else
                        <div class="flex items-center justify-end w-full lg:hidden mt-3">
                            <a href="/login" class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                                Sign In
                            </a>
                            <a href="/register"
                                class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
                                Register
                            </a>
                        </div>
                    @endauth
                @endif

                <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </nav>
            <div class="hidden items-center justify-end lg:flex">
                @if (Route::has('login'))
                    @auth
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->nama_lengkap }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                                                                                                                                                                    this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @else
                        <a href="/login" class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                            Sign In
                        </a>
                        @if (Route::has('register'))
                            <a href="/register"
                                class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                                Register
                            </a>
                        @endif
                    @endauth
                @endif
            </div>
        </header>
        <div class="lg:px-24 md:px-16 sm:px-8 px-8">
            <hr style="border-color: #f4f4f4" />
        </div>

    </div>
</section>
