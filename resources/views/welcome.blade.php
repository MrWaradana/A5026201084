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
        </style>
@endsection

@section('konten')

        <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    Muhammad Ridho Waradana
                    5026201084
                </div>

                <h1>Landing Page</h1>

                <div class="links my-3">
                    <a href="/tugas1/profil_diri.html"  class="btn btn-primary">Tugas 1</a>
                    <a href="/tugas2/profil_diri.html"  class="btn btn-primary">Tugas 2</a>
                    <a href="/tugas3/index.html"  class="btn btn-primary">Tugas 3</a>
                    <a href="/praktikum1/index.html"  class="btn btn-primary">Praktikum 1</a>
                    <a href="/tugas4"  class="btn btn-primary">Tugas 4</a>
                    <a href="/praktikum2"  class="btn btn-primary">Praktikum 2</a>
                    <a href="/ets"  class="btn btn-primary">ETS</a>
                    <a href="/tugasphp"  class="btn btn-primary">Tugas PHP</a>
                    <a href="/isiannama"  class="btn btn-primary">Isian Nama</a><br><br>
                    <a href="/pegawai"  class="btn btn-primary">Tabel Pegawai</a>
                    <a href="/tugas" class="btn btn-primary">Tabel Tugas (Tugas 25 Nov 2021)</a>
                </div>
            </div>
        </div>
@endsection
