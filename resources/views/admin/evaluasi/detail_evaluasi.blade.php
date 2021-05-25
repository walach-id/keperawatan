@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">
            <!-- component -->
            <div class="w-full pt-3 block items-center justify-center xl:flex lg:flex">

                <p class="text-4xl mb-5 ">Evaluasi</p>

            </div>
            <div class="flex justify-center">
                <div class="w-full lg:w-1/3 xl:w-1/3 rounded-xl bg-white border shadow-md">
                    {{-- <p class="text-2xl my-3 text-center">Keluhan: {{ $penyakit->nama_penyakit }}</p> --}}

                    <div class="mx-5 my-5">
                        <p class="text-3xl">Detail Evaluasi</p>
                        <hr>
                        <table class="mx-3 my-3 w-full">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td> {{ $evaluasi->nama_lengkap }}</td>
                            </tr>
                            <tr>
                                <td>Keluhan</td>
                                <td>:</td>
                                <td> {{ $evaluasi->keluhan }}</td>
                            </tr>
                            <tr>
                                <td>Terapi</td>
                                <td>:</td>
                                <td> {{ $evaluasi->terapi }}</td>
                            </tr>
                            <?php
                            $sekarang = date_create();
                            $tgl = date_create($evaluasi->tgl_mulai);
                            $beda = date_diff($tgl, $sekarang);
                            ?>
                            <tr>
                                <td>Interval Waktu</td>
                                <td>:</td>
                                <td> {{ $beda->d }} Hari</td>
                            </tr>
                            <tr valign="top">
                                <td>Keluhan</td>
                                <td>:</td>
                                <td> {{ $evaluasi->jenis_keluhan }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
