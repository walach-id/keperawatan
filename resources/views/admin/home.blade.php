@extends('admin/layout/template')
@section('content')
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 text-gray-800 leading-normal">

            <h1 class="text-4xl font-semibold">Hi, {{ Auth::user()->nama_lengkap }}</h1>

        </div>


    </div>
@endsection
