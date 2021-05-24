@extends('layout.template')
@section('content')
    <section class="pt-12 h-full w-full border-box bg-white">

        <div class="content-2-2" style="font-family: 'Poppins', sans-serif">
            <div class="container lg:px-32 md:px-8 sm:px-12 px-5 pt-20 pb-12 mx-auto">
                <!-- Title Text -->
                <div class="flex flex-col text-center w-full mb-12">
                    <h1 class="text-4xl font-semibold title-font mb-2.5 text-medium-black">
                        Masalah Keperawatan
                    </h1>
                    <h2
                        class="text-base font-light title-font mx-12 lg:w-full md:w-full sm:w-3/6 sm:mx-auto text-medium-black">
                        Apa yang kamu alami saat ini ?
                    </h2>
                </div>
                <div class="flex flex-wrap w-full">
                    @foreach ($penyakit as $data)

                        <div class="px-10 py-5 md:px-0 lg:px-4 lg:w-1/3 md:w-1/3 sm:w-4/6 mx-auto">
                            <a href="{{ url('form_gejala/' . $data->id) }}">
                                <div
                                    class="flex rounded-2xl shadow-md border-2 h-full lg:pt-8 lg:pb-8 md:pt-8 md:pb-8 pt-4 pb-12 flex-col">
                                    <div class="items-center text-center">
                                        <div class="inline-flex items-center justify-center rounded-full mb-6">
                                            <img src="/img/symptoms.png" alt="" />
                                        </div>
                                    </div>
                                    <div class="flex-grow">
                                        <h4 class="font-medium text-center text-2xl mb-2.5 text-medium-black">
                                            Masalah Keperawatan {{ $data->nama_penyakit }}
                                        </h4>
                                        <p class="leading-relaxed text-base text-center tracking-wide text-gray">
                                            {{ $data->kode_penyakit }}
                                        </p>
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
