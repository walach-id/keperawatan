@extends('layout.template')
@section('content')
    <section class="pt-20 h-full w-full border-box bg-white">
        <div class="font-sans min-h-screen antialiased bg-white pt-24 pb-5">
            <div class="flex flex-col justify-center sm:w-96 sm:m-auto mx-5 mb-5 space-y-8">

                <div class="flex flex-col bg-white p-10 rounded-lg  shadow-xl space-y-6">
                    <h1 class="font-bold text-xl text-center">Detail Keluhan dan Terapi</h1>
                    @foreach ($evaluasi as $data)
                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Keluhan dialami </label>
                            <input type="text" name="username" id="username"
                                class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow"
                                placeholder="Username" readonly value="{{ $data->keluhan }}" />
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Jenis Keluhan </label>
                            <textarea readonly class="focus:border-blue-400 focus:shadow"
                                rows="5"> {{ $data->jenis_keluhan }}</textarea>
                        </div>
                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Terapi dilakukan </label>
                            <input type="text" name="username" id="username"
                                class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow"
                                placeholder="Username" readonly value="{{ $data->terapi }}" />
                        </div>

                        <div class="flex flex-col space-y-1">
                            <?php $tgl_mulai = date_create($data->tgl_mulai); ?>
                            <label class="font-semibold"> Tanggal Mulai </label>
                            <input type="text" name="username" id="username"
                                class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow"
                                placeholder="Username" readonly value=" {{ date_format($tgl_mulai, 'd-m-Y') }}" />
                        </div>
                        <?php $tgl_today = date('d-m-Y'); ?>
                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Tanggal Hari Ini </label>
                            <input type="text" name="username" id="username"
                                class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow"
                                placeholder="Username" readonly value="{{ $tgl_today }}" />
                        </div>
                        <?php
                        $sekarang = date_create();
                        $tgl = date_create($data->tgl_mulai);
                        $beda = date_diff($tgl, $sekarang);
                        ?>
                        <div class="flex flex-col space-y-1">
                            <label class="font-semibold"> Interval Hari </label>
                            <input type="text" name="username" id="username"
                                class="border-2 rounded px-3 py-2 w-full focus:outline-none focus:border-blue-400 focus:shadow"
                                placeholder="Username" readonly value="  {{ $beda->d }} Hari" />
                        </div>

                        <div class="flex flex-col-reverse sm:flex-row sm:justify-between items-center">

                            <a href="{{ url('/evaluasi') }}"
                                class="bg-blue-500 text-white font-bold px-5 py-2 rounded focus:outline-none shadow hover:bg-blue-700 transition-colors">Kembali</a>
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
    </section>
@endsection
