@extends('layout.template')
@section('content')
    <section class="pt-12 h-full w-full border-box bg-white">

        <!-- component -->
        <div class="min-h-screen my-10 bg-gray-300 flex flex-col justify-center">
            <div class="py-5 mx-5 sm:max-w-xl sm:mx-auto">
                <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
                    <div class="px-12 py-5">
                        <h2 class="text-gray-800 text-3xl text-center font-semibold">Gejala yang Dialami</h2>
                    </div>
                    <div class="bg-gray-200 w-full flex flex-col items-center">

                        <div class="w-3/4 flex flex-col">
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Merasakan Nyeri"><span
                                    class="ml-2 text-gray-700">Merasakan Nyeri</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Merasa Gelisah"><span
                                    class="ml-2 text-gray-700">Merasa Gelisah</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Gangguan Pola Tidur"><span
                                    class="ml-2 text-gray-700">Gangguan Pola Tidur</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Kurang Konsentrasi"><span
                                    class="ml-2 text-gray-700">Kurang Konsentrasi</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Aktivitas Anda Terhambat"><span
                                    class="ml-2 text-gray-700">Aktivitas Anda Terhambat</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Merasa Tertekan"><span
                                    class="ml-2 text-gray-700">Merasa Tertekan</span>
                            </label>
                            <label class="inline-flex items-center mt-3">
                                <input type="checkbox" class="form-checkbox h-5 w-5 " value="Tampak Meringis"><span
                                    class="ml-2 text-gray-700">Tampak Meringis</span>
                            </label>
                            <button
                                class="py-3 my-8 text-lg bg-gradient-to-r from-purple-500 to-indigo-600 rounded-xl text-white">Implementasi</button>
                        </div>
                    </div>
                    <div class="h-20 flex items-center justify-center">
                        <p class="mx-5 text-gray-600">Pastikan anda mencentang tanda dan gejala yang anda alami</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
