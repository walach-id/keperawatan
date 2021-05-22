@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">
        <div class="w-full px-4 md:px-0 md:mt-8 text-gray-800 leading-normal">
            <!-- component -->
            <div class="w-full pt-3 flex items-center">
                <div class="">
                    <p class="text-4xl">Edit Data Penyakit</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="m-5">
            <div class="flex border rounded-md shadow-md bg-gray-50 dark:bg-gray-900">
                <div class="container mx-auto">
                    <div class="mx-auto my-10 bg-white p-5 rounded-md shadow-sm">
                        <div class="text-center">
                            <p class="text-gray-400 dark:text-gray-400">Fill up the form below to send us a message.</p>
                        </div>
                        <div class="flex justify-center">
                            <div class="m-7 max-w-md">
                                <form action="/penyakit/edit/proses/{{ $penyakit->id }}" method="POST" id="form">
                                    @csrf

                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full
                                            Nama Penyakit</label>
                                        <input type="text" name="nama_penyakit" value="{{ $penyakit->nama_penyakit }}"
                                            id="name" placeholder="cth: Nyeri Kronis" required
                                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                                    </div>

                                    <div class="mb-6">
                                        <label class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Full
                                            Kode Penyakit</label>
                                        <input type="text" name="kode_penyakit" value="{{ $penyakit->kode_penyakit }}"
                                            id="name" placeholder="cth: (D.0078)" required
                                            class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                                    </div>

                                    <div class="mb-3">
                                        <input type="submit" value="Ubah Data"
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

            {{-- <script>
                const form = document.getElementById('form');
                const result = document.getElementById('result');

                form.addEventListener('submit', function(e) {
                    const formData = new FormData(form);
                    e.preventDefault();
                    var object = {};
                    formData.forEach((value, key) => {
                        object[key] = value
                    });
                    var json = JSON.stringify(object);
                    result.innerHTML = "Please wait..."

                    fetch('https://api.web3forms.com/submit', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json'
                            },
                            body: json
                        })
                        .then(async (response) => {
                            let json = await response.json();
                            if (response.status == 200) {
                                result.innerHTML = json.message;
                                result.classList.remove('text-gray-500');
                                result.classList.add('text-green-500');
                            } else {
                                console.log(response);
                                result.innerHTML = json.message;
                                result.classList.remove('text-gray-500');
                                result.classList.add('text-red-500');
                            }
                        })
                        .catch(error => {
                            console.log(error);
                            result.innerHTML = "Something went wrong!";
                        })
                        .then(function() {
                            form.reset();
                            setTimeout(() => {
                                result.style.display = "none";
                            }, 5000);
                        });
                })

            </script> --}}
        </div>
    </div>
@endsection
