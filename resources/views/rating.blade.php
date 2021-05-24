@extends('layout.template')
@section('content')
    <section class="pt-20 h-full w-full border-box bg-white">

        <!-- component -->
        <div class="min-h-screen my-10 bg-gray-300 flex flex-col justify-center">
            <div class="py-5 mx-5 sm:max-w-xl sm:mx-auto -mt-36 lg:mt-0">
                <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
                    <div class="px-12 py-5">
                        <h2 class="text-gray-800 text-3xl text-center font-semibold">Rating & Review </h2>
                    </div>
                    @if ($message = Session::get('pesan'))
                        <div class="bg-green-100 border border-green-400 text-black font-bold mt-2 " role="alert">

                            <small class="text-center px-16 block sm:inline">{{ $message }}</small>

                        </div>



                    @endif
                    <div class="bg-gray-200 w-full flex flex-col items-center">
                        <form action="{{ url('/add/rating') }}" method="POST" class="w-3/4 flex flex-col">
                            @csrf

                            <label class="-ml-4 lg:-ml-3 inline-flex items-center mt-3">
                                <input type="radio" class="form-checkbox h-5 w-5 " value="5" name="rating"><span
                                    class="ml-2 mt-2 text-gray-700">
                                    <div class="flex items-center mt-2 mb-4">
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>



                                    </div>
                                </span>
                                <input type="radio" class="form-checkbox h-5 w-5 ml-6 " value="4" name="rating"><span
                                    class="ml-2 mt-2 text-gray-700">
                                    <div class="flex items-center mt-2 mb-4">
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>


                                    </div>
                                </span>
                            </label>

                            <label class="-ml-4 lg:-ml-3  inline-flex items-center mt-3">
                                <input type="radio" class="form-checkbox h-5 w-5 " value="3" name="rating"><span
                                    class="ml-2 mt-2 text-gray-700">
                                    <div class="flex items-center mt-2 mb-4">
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>



                                    </div>
                                </span>
                                <input type="radio" class="form-checkbox h-5 w-5 ml-6 " value="2" name="rating"><span
                                    class="ml-2 mt-2 text-gray-700">
                                    <div class="flex items-center mt-2 mb-4">
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>


                                    </div>
                                </span>
                            </label>

                            <label class="-ml-4 lg:-ml-3 inline-flex items-center mt-3">
                                <input type="radio" class="form-checkbox h-5 w-5 " value="1" name="rating"><span
                                    class="ml-2 mt-2 text-gray-700">
                                    <div class="flex items-center mt-2 mb-4">
                                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>
                                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                        </svg>




                                    </div>
                                </span>

                            </label>

                            <label class="font-semibold -ml-4 lg:-ml-3"> Review </label>
                            <textarea class="-ml-4 lg:-ml-3 focus:border-blue-400 focus:shadow" rows="5"
                                name="review"> </textarea>
                            <input type="submit" value="Kirim Ulasan"
                                class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">

                        </form>

                    </div>
                    <div class="h-20 flex items-center justify-center">
                        <p class="mx-5 text-gray-600">Terimakasih telah memberikan penilaian bagi kami </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
