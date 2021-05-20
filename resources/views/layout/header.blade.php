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
                <a href="#" class="text-sm text-black-1 font-medium mx-0 lg:mx-5 my-4 lg:my-0 relative active">Home</a>
                <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Evaluasi</a>
                {{-- <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Pricing</a>
                <a href="#" class="text-sm text-black-2 font-light mx-0 lg:mx-5 my-4 lg:my-0 relative">Blog</a> --}}

                <div class="flex items-center justify-end w-full lg:hidden mt-3">
                    <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                        Sign In
                    </button>
                    <button class="btn-fill text-sm text-white font-medium py-3 px-8 rounded-full focus:outline-none">
                        Register
                    </button>
                </div>
                <svg @click="open = !open" class="w-6 h-6 absolute top-4 right-4 cursor-pointer lg:hidden" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </nav>
            <div class="hidden items-center justify-end lg:flex">
                <button class="btn-no-fill text-sm font-medium py-3 px-8 focus:outline-none">
                    Sign In
                </button>
                <button class="btn-fill text-white font-medium text-sm py-3 px-6 rounded-full focus:outline-none">
                    Register
                </button>
            </div>
        </header>
        <div class="lg:px-24 md:px-16 sm:px-8 px-8">
            <hr style="border-color: #f4f4f4" />
        </div>

    </div>
</section>
