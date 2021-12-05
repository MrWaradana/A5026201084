@extends('layout.main')

@section('title', 'Home')

@section('style')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            @media(max-width:768px){
                .title {
                font-size: 3rem !important;
            }
            }
        </style>
@endsection

@section('konten')
<div class="content">
    <div class="title m-b-md">
        Muhammad Ridho Waradana
        5026201084
    </div>

    <h1 class="title">Landing Page</h1>

    <ul class="navbar-nav d-flex flex-lg-row flex-column justify-content-around">
    <li class="nav-item active">
        <a href="/tugas1/profil_diri.html"  class="btn btn-primary">Tugas 1</a>
    </li>
    <li class="nav-item">
        <a href="/tugas2/profil_diri.html"  class="btn btn-primary">Tugas 2</a>
    </li>
    <li class="nav-item">
        <a href="/tugas3/index.html"  class="btn btn-primary">Tugas 3</a>
    </li>
    <li class="nav-item">
        <a href="/praktikum1/index.html"  class="btn btn-primary">Praktikum 1</a>
    </li>
    <li class="nav-item">
        <a href="/tugas4"  class="btn btn-primary">Tugas 4</a>
    </li>
    <li class="nav-item">
        <a href="/praktikum2"  class="btn btn-primary">Praktikum 2</a>
    </li>
    <li class="nav-item">
        <a href="/ets"  class="btn btn-primary">ETS</a>
    </li>
    <li class="nav-item">
        <a href="/tugasphp"  class="btn btn-primary">Tugas PHP</a>
    </li>
    <li class="nav-item">

        <a href="/isiannama"  class="btn btn-primary">Isian Nama</a>
    </li>
    <li class="nav-item">
        <a href="/pegawai"  class="btn btn-primary">Tabel Pegawai</a>
    </li>
    <li class="nav-item">

        <a href="/tugas" class="btn btn-primary">Tabel Tugas (Tugas 25 Nov 2021)</a>
    </li>
  </ul>
</div>

        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


        </div> --}}
@endsection
