@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!-- component -->
            <div class="w-full pt-3 block items-center justify-center xl:flex lg:flex">

                <p class="text-4xl mb-5 ">Tambah Terapi Penyakit</p>

            </div>
            <div class="flex justify-center">
                <div class="w-full lg:w-1/3 xl:w-1/3 rounded-xl bg-white border shadow-md">
                    {{-- <p class="text-2xl my-3 text-center">Keluhan: {{ $penyakit->nama_penyakit }}</p> --}}
                    <hr>
                    <div class="m-7 max-w-md">
                        <form action="/treatment/add/proses" method="POST" id="form">
                            @csrf

                            <div class="mb-6">
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nama Terapi
                                    Penyakit</label>
                                <input type="text" name="nama_terapi" id="name" placeholder="cth: Merasakan Nyeri" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            </div>

                            <div class="mb-6">
                                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nama Penyakit</label>
                                <select
                                    class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300"
                                    name="penyakit" id="">
                                    @foreach ($penyakit as $data)
                                        <option value="{{ $data->id }}"> {{ $data->nama_penyakit }} </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Tambah Data"
                                    class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">
                            </div>
                            {{-- <p class="text-base text-center text-gray-400" id="result"> --}}
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
