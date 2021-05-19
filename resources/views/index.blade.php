@extends('layout.template')
@section('content')

    <section class="pt-12 h-full w-full border-box bg-white">
        <div>
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1 class="title-font text-black-1 sm:text-5xl lg:text-6xl text-4xl mb-5 font-semibold"
                        style="line-height: 1.25;">
                        The New Way<br class="lg:block hidden" />
                        <span style="color: #ff7468"> Learn Skills</span> From <br class="lg:block hidden" />
                        Our Best Mentor
                    </h1>
                    <p class="text-base text-black-2 font-light leading-6 tracking-wide mb-12 lg:mb-20">
                        Hard to find a good mentor according to your wishes?<br class="sm:block hidden" /> Don't
                        worry because we are here to help you
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        <button style="background-color: #ff7468"
                            class="btn-fill inline-flex font-semibold text-white text-base py-4 px-8 rounded-full mb-4 lg:mb-0 md:mb-0 focus:outline-none">
                            Get Started
                        </button>
                        <button
                            class="border-2 border-gray-500 font-normal text-base py-4 px-6 rounded-full focus:outline-none bg-transparent">
                            <div class="flex items-center">
                                <svg class="mr-2.5" width="26" height="27" viewBox="0 0 26 27" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.9294 13.5L11.6667 10.658V16.342L15.9294 13.5ZM17.9174 13.7773L10.8514 18.488C10.8012 18.5214 10.7429 18.5406 10.6826 18.5435C10.6224 18.5463 10.5625 18.5328 10.5094 18.5044C10.4562 18.4759 10.4118 18.4336 10.3808 18.3818C10.3498 18.3301 10.3334 18.271 10.3334 18.2107V8.78934C10.3334 8.72904 10.3498 8.66989 10.3808 8.61817C10.4118 8.56645 10.4562 8.5241 10.5094 8.49564C10.5625 8.46719 10.6224 8.45368 10.6826 8.45656C10.7429 8.45944 10.8012 8.4786 10.8514 8.512L17.9174 13.2227C17.963 13.2531 18.0005 13.2944 18.0263 13.3427C18.0522 13.3911 18.0658 13.4451 18.0658 13.5C18.0658 13.5549 18.0522 13.6089 18.0263 13.6573C18.0005 13.7057 17.963 13.7469 17.9174 13.7773Z"
                                        fill="#8A807B" />
                                    <rect x="0.5" y="1" width="25" height="25" rx="12.5" stroke="#8A807B" />
                                </svg>
                                Watch the video
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-2-2" style="font-family: 'Poppins', sans-serif">
            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">
                        Masalah Keperawatan
                    </h1>
                    <h2
                        class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-medium-black">
                        Membantu mendapatkan solusi terapi untuk permasalahn kesehatan
                    </h2>
                </div>

                <!-- 3-Column -->
                <div class="flex lg:flex-row flex-col -m-4">
                    <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                        <div class="flex rounded-2xl border h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
                            <div class="items-center text-center">
                                <div class="inline-flex items-center justify-center rounded-full mb-6">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-5.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                    Easy to Operate
                                </h4>
                                <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                    This can easily help you to <br /> grow up your business fast
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                        <div class="flex rounded-2xl border h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-12 flex-col">
                            <div class="items-center text-center">
                                <div class="inline-flex items-center justify-center rounded-full mb-6">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-6.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                    Real-Time Analytic
                                </h4>
                                <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                    With real-time analytics, you <br /> can check data in real time
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="px-14 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                        <div class="flex rounded-2xl border h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-12 pb-6 flex-col">
                            <div class="items-center text-center">
                                <div class="inline-flex items-center justify-center rounded-full mb-6">
                                    <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-7.png"
                                        alt="" />
                                </div>
                            </div>
                            <div class="flex-grow">
                                <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                    Very Full Secured
                                </h4>
                                <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                    With real-time analytics, we <br /> will guarantee your data
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:px-24 md:px-16 sm:px-8 px-4 pb-20 pt-12 mx-auto">
                <div class="flex lg:flex-row flex-col -m-4">
                    <div class="p-4 w-full">
                        <div
                            class="card-header h-full flex lg:flex-row flex-col p-7 rounded-xl lg:space-x-3.5 md:space-x-3.5 space-x-0">
                            <div class="text-center mx-auto">
                                <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                                    alt="" />
                            </div>
                            <div
                                class="flex-grow my-auto lg:text-left lg:w-3/4 w-full text-center lg:my-auto md:my-auto py-6">
                                <h4 class="text-2xl font-semibold mb-2.5">
                                    Mari daftarkan diri anda
                                </h4>
                                <p class="text-base font-light tracking-wide w-full text-gray">
                                    Aplikasi kami membantu anda mendapatkan solusi permasalahan kesehatan
                                </p>
                            </div>
                            <a class="inline-block items-center my-auto text-center">
                                <button
                                    class="btn-fill font-bold text-white text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full rounded-xl mb-4 md:mb-5 lg:mb-5 focus:outline-none hover:shadow-lg">
                                    Login Sekarang
                                </button>
                                <button
                                    class="btn-outline font-normal text-black text-base py-4 lg:w-full md:w-full sm:w-2/3 w-full px-6 rounded-xl focus:outline-none bg-transparent rounded hover:border-transparent">
                                    Daftar Sekarang
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
