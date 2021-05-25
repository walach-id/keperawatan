@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!-- component -->
            <div class="w-full pt-3 block items-center justify-center xl:flex lg:flex">

                <p class="text-4xl mb-5 ">Tambah Langkah terapi</p>

            </div>
            <div class="flex justify-center">
                <div class="w-full lg:w-1/2 xl:w-1/2 rounded-xl bg-white border shadow-md">
                    {{-- <p class="text-2xl my-3 text-center">Keluhan: {{ $penyakit->nama_penyakit }}</p> --}}
                    <hr>
                    <div class="m-7">
                        <form action="/step-treatment/add/proses" method="POST" id="form">
                            @csrf

                            <div class="mb-8">
                                <label class="text-xl text-gray-600">Langkah-Langkah Terapi<span
                                        class="text-red-500">*</span></label></br>
                                <textarea name="content" class="border-2 border-gray-500">

                                                                    </textarea>
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

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('content');

    </script>
@endsection
