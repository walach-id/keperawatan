@extends('layout.template')
@section('content')
    <section class="pt-20 h-full w-full border-box bg-white">
        <div class="font-sans min-h-screen antialiased bg-white pt-24 pb-5">
            <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">


                <div class="flex flex-col bg-white p-10 rounded-lg  shadow-xl space-y-6">
                    @foreach ($detail as $data)

                        <h1 class="font-bold text-xl text-center">Evaluasi {{ $data->keluhan }}</h1>

                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Keluhan Sebelumnya </label>
                            <textarea readonly class="focus:border-blue-400 focus:shadow"
                                rows="5"> {{ $data->jenis_keluhan }}</textarea>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Terapi dilakukan </label>
                            <input type="text" name="username" id="username"
                                class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow"
                                placeholder="Username" readonly value="{{ $data->terapi }}" />
                        </div>
                        <form action="{{ url('/update/gejala/' . $data->unique_id) }}" method="POST"
                            class="w-3/4 flex flex-col">
                            @csrf
                    @endforeach

                    <hr>

                    <div class="flex flex-col space-y-1">
                        <label class="font-semibold"> Keluhan saat ini </label>


                        @foreach ($langkah_terapi as $data)
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="{{ $data->nama_gejala }}"
                                    name="gejala[]"><span class="ml-2 text-gray-700">{{ $data->nama_gejala }}</span>
                            </label>
                        @endforeach

                    </div>
                    <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center mt-6">

                        <a href="{{ url('/evaluasi') }}"
                            class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Kembali</a>
                        <input type="submit"
                            class="bg-red-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-red-700 transition-colors"
                            value="Evaluasi">

                    </div>
                    </form>

                </div>


            </div>
        </div>
    </section>
@endsection
