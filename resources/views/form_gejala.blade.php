@extends('layout.template')
@section('content')
    <section class="pt-20 h-full w-full border-box bg-white">

        <!-- component -->
        <div class="min-h-screen my-10 bg-gray-300 flex flex-col justify-center">
            <div class="py-5 mx-5 sm:max-w-xl sm:mx-auto">
                <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
                    <div class="px-12 py-5">
                        <h2 class="text-gray-800 text-3xl text-center font-semibold">Gejala yang Dialami</h2>
                    </div>
                    <div class="bg-gray-200 w-full flex flex-col items-center">



                        <form action="{{ url('/add/gejala') }}" method="POST" class="w-3/4 flex flex-col">
                            @if ($message = Session::get('pesan'))
                                <div class="px-4 bg-red-100 border border-red-400 text-red-700 mt-2 rounded" role="alert">

                                    <small class="block sm:inline">{{ $message }}</small>
                                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">

                                    </span>
                                </div>
                            @endif
                            @csrf
                            @foreach ($gejala as $data)

                                <label class="inline-flex items-center mt-3">
                                    <input type="checkbox" class="form-checkbox h-5 w-5 " value="{{ $data->nama_gejala }}"
                                        name="gejala[]"><span class="ml-2 text-gray-700">{{ $data->nama_gejala }}</span>
                                </label>
                            @endforeach
                            <input type="submit" value="Implementasi"
                                class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">

                        </form>

                    </div>
                    <div class="h-20 flex items-center justify-center">
                        <p class="mx-5 text-gray-600">Pastikan anda mencentang tanda dan gejala yang anda alami</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
