@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!-- component -->
            <div class="w-full pt-3 block items-center justify-center xl:flex lg:flex">

                <p class="text-4xl mb-5 ">Langkah-langkah Treatment</p>

            </div>
            <div class="flex justify-center">
                <div class="w-full lg:w-1/2 xl:w-1/2 rounded-xl bg-white border shadow-md">
                    <p class="text-2xl my-3 text-center">Langkah Terapi: {{ $terapi->nama_terapi }}</p>
                    <hr>
                    <div class="ml-5 my-3">
                        <div class="py-3 flex justify-center">
                            <a href="/gejala/add"
                                class="bg-blue-500 px-4 py-2 font-semibold tracking-wider text-white rounded hover:bg-blue-600">Tambah
                                data gejala</a>
                        </div>

                        <table class="w-full">

                            @foreach ($langkah as $data)
                                <tr>

                                    <td class="px-5">
                                        {!! $data->langkah_terapi !!}
                                    </td>
                                    <td class="flex">
                                        <a href="/gejala/edit/{{ $data->id }}"
                                            class="w-4 mx-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href="/gejala/hapus/{{ $data->id }}"
                                            onclick="return confirm('anda yakin ingin hapus data?')"
                                            class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <style>
        ol {
            list-style-type: decimal;
        }

    </style>
@endsection
