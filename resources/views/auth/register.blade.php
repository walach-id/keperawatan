<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('User Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Nama Lengkap -->
            <div class="mt-4">
                <x-label for="nama_lengkap" :value="__('Nama Lengkap')" />

                <x-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap"
                    :value="old('nama_lengkap')" required />
            </div>

            <!-- Umur -->
            <div class="mt-4">
                <x-label for="umur" :value="__('Umur')" />

                <x-input id="umur" class="block mt-1 w-full" type="text" name="umur" :value="old('umur')" required />
            </div>

            <!-- jenis kelamin -->
            <div class="mt-4">
                <x-label for="jekel" value="{{ __('Jenis Kelamin') }}" />
                <select name="jekel" x-model="jekel"
                    class="block mt-1 w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>

            <!-- kota -->
            <div class="mt-4">
                <x-label for="kota" :value="__('Kota')" />

                <x-input id="kota" class="block mt-1 w-full" type="text" name="kota" :value="old('kota')" required />
            </div>

            <!-- Diagnosa Medis -->
            <div class="mt-4">
                <x-label for="diagnosa_medis" :value="__('Diagnosa Medis (3 Bulan Terakhir)  ')" />

                <x-input id="diagnosa_medis" class="block mt-1 w-full" type="text" name="diagnosa_medis"
                    :value="old('diagnosa_medis')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
