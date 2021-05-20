<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keperawatan | STIKIM</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .content-2-2 .btn-outline {
            border: 1px solid #979797;
            color: #979797;
        }

        .content-2-2 .btn-outline:hover {
            border: 1px solid #27c499;
            color: #27c499;
        }

        .content-2-2 .btn-fill {
            background-color: #27c499;
            border: 1px solid #27c499;
        }

        .content-2-2 .card-header {
            background-color: #eef6f4;
            border: 1px solid #27c499;
        }

        .content-2-2 .text-medium-black {
            color: #121212;
        }

        .content-2-2 .text-gray {
            color: #565656;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-3-2 .btn-no-fill,
        .header-3-2 .text-black-2 {
            color: #303030;
            transition: 0.3s;
        }

        .header-3-2 .btn-no-fill:hover,
        .header-3-2 .text-black-1 {
            color: #243142;
            transition: 0.3s;
        }

        .header-3-2 .text-gray-1 {
            color: #aaa6a6;
        }

        .header-3-2 .btn-outline:hover {
            border: 1px solid #ff7468;
            color: #ff7468;
            transition: 0.3s;
        }

        .peach {
            background-color: #ff7468;
        }

        .header-3-2 .card {
            box-shadow: -4px 4px 10px 0px rgba(224, 224, 224, 0.25);
            transition: 0.4s;
            top: 0px;
            left: 0px;
            position: relative;
        }

        .header-3-2 .card:hover {
            box-shadow: -4px 8px 15px 0px rgba(167, 167, 167, 0.25);
            top: -3px;
            left: -3px;
            position: relative;
            transition: 0.4s;
        }

        .header-3-2 .navigation .active {
            position: relative;
            padding-bottom: 3px;
            padding-top: 3px;
            transition: 0.3s;
        }

        .header-3-2 .navigation .active:before {
            content: "";
            position: absolute;
            margin-left: auto;
            margin-right: auto;
            left: 0;
            right: 0;
            text-align: center;
            bottom: 0;
            height: 0px;
            width: 80%;
            border-bottom: 2px solid #ff7468;
        }

        .header-3-2 .btn-fill {
            border: 1px solid #ff7468;
            background-color: #ff7468;
            transition: 0.3s;
        }

        .header-3-2 .btn-fill:hover {
            background-color: #ff8378;
            border: 1px solid #ff8378;
        }

        .header-3-2 .btn-outline {
            border: 1px solid #8a807b;
            color: #8a807b;
            transition: 0.3s;
        }

        .header-3-2 .btn-outline:hover div path {
            fill: #ff7468;
        }

        .header-3-2 .btn-outline:hover div rect {
            stroke: #ff7468;
        }

        .header-3-2 .navigation a:hover {
            color: #243142 !important;
            font-weight: 500;
            transition: 0.2s;
        }

        .header-3-2 #form {
            width: 100%;
        }

        .header-3-2 #form input[type="text"] {
            width: 100%;
            background-color: #fff3f2;
            box-sizing: border-box;
            font-size: 14px;
            padding: 0.375rem 0.5rem;
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
        }

        .header-3-2 .search-icon:hover path {
            fill: #243142;
        }

        @media (max-width: 1023px) {
            .header-3-2 #form input[type="text"] {
                width: 100%;
            }
        }

        @media (min-width: 1024px) {
            .header-3-2 .center-search {
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            .header-3-2 #form {
                width: 320px;
            }
        }

        ol {
            list-style-type: decimal;
            padding-left: 2.5rem
                /* 40px */
            ;
            padding-right: 2.5rem
                /* 40px */
            ;
            padding-top: 1.25rem
                /* 20px */
            ;
            padding-bottom: 1.25rem
                /* 20px */
            ;
            text-align: justify;
        }

        ul {
            list-style-type: circle;
            padding-left: 2.5rem
                /* 40px */
            ;
            padding-right: 2.5rem
                /* 40px */
            ;
            padding-top: 1.25rem
                /* 20px */
            ;
            padding-bottom: 1.25rem
                /* 20px */
            ;
            text-align: justify;
        }

        li {
            margin-bottom: 0.5rem
                /* 8px */
            ;
        }

        li p {
            margin-bottom: 0.5rem;
        }

    </style>
</head>

<body>
    @include('layout.header')

    {{-- isi content --}}
    @yield('content')
    {{-- batas content --}}

    @include('layout.footer')

</body>

</html>
