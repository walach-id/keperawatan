@extends('layout.template')
@section('content')
    <section class="pt-12 h-full w-full border-box bg-white">
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div>
                    <h2 class="text-2xl font-semibold leading-tight">Users</h2>
                </div>

                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Tanggal Awal
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Keluhan
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Terapi
                                    </th>
                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Interval Waktu
                                    </th>

                                    <th
                                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                        Detail
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($evaluasi as $data)
                                    <tr>
                                        <?php $tgl_mulai = date_create($data->tgl_mulai); ?>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ date_format($tgl_mulai, 'd-m-Y') }}
                                            </p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $data->keluhan }}</p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $data->terapi }}
                                            </p>
                                        </td>
                                        <?php
                                        $sekarang = date_create();
                                        $tgl = date_create($data->tgl_mulai);
                                        $beda = date_diff($tgl, $sekarang);
                                        ?>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $beda->d }} Hari
                                            </p>
                                        </td>

                                        <td class="flex px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <a class="inline-flex items-center h-8 px-4 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800"
                                                href="{{ url('evaluasi/detail/' . $data->unique_id) }}">Detail</a>

                                            <a class="inline-flex items-center h-8 px-4 ml-2 text-sm text-indigo-100 transition-colors duration-150 bg-indigo-700 rounded-lg focus:shadow-outline hover:bg-indigo-800"
                                                href="{{ url('evaluasi/pra/' . $data->unique_id) }}">Evaluasi </a>

                                        </td>



                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <div
                            class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
                            <span class="text-xs xs:text-sm text-gray-900">
                                Showing 1 to 4 of 50 Entries
                            </span>
                            <div class="inline-flex mt-2 xs:mt-0">
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                    Prev
                                </button>
                                <button
                                    class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                    Next
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
