@extends('layout.template')
@section('content')
    <section class="pt-20 h-full w-full border-box bg-white">

        <!-- component -->
        <div class="min-h-screen my-10 bg-gray-300 flex flex-col items-center justify-center">
            <div class="py-5 mx-5 sm:max-w-xl sm:mx-auto">
                <div class="bg-white min-w-1xl flex flex-col rounded-xl shadow-lg">
                    <div class="px-12 py-5">
                        @if ($message = Session::get('terapi'))
                            <h2 class="text-gray-800 text-3xl text-center font-semibold">TERAPI {{ Str::upper($message) }}
                            </h2>
                        @endif

                    </div>
                    <div class="bg-gray-200 w-full items-center">
                        <p class="text-xl text-justify px-5">Langkah-langkah treatment: </p>
                        @foreach ($step_terapi as $data)

                            <?php echo $data->langkah_terapi; ?>
                        @endforeach

                    </div>
                    <div class="h-20 items-center">
                        <p class="mx-5 text-gray-600">Jurnal Pendukung</p>
                        <p class="mx-5 text-gray-600">1. File A</p>
                        <p class="mx-5 text-gray-600">2. File B</p>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
