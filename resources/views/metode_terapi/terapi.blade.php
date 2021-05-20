@extends('layout.template')
@section('content')
    <section class="pt-12 h-full w-full border-box bg-white">

        <div class="content-2-2" style="font-family: 'Poppins', sans-serif">
            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">
                        Intervensi Komplementer: Nyeri
                    </h1>
                    <h2
                        class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-medium-black">
                        *Pilih Salah Satu Treatment Saja
                    </h2>
                </div>


                <div class="flex flex-wrap w-full">
                    @foreach ($terapi as $data)
                        <div class="px-10 py-5 md:px-0 lg:px-4 lg:w-1/2 md:w-1/2 w-full mx-auto">
                            <a href="{{ url('/step_terapi/' . $data->id) }}">
                                <div
                                    class="w-full peach hover:bg-red-300 flex rounded-2xl shadow-md border-2 lg:pt-8 lg:pb-8 md:pt-8 py-6">
                                    <div class="flex-grow">
                                        <h4 class="font-medium text-center text-2xl mb-2.5 text-white">
                                            {{ $data->nama_terapi }}
                                        </h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
    </section>
@endsection
