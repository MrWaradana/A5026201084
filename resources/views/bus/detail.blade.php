@extends('layout.main')

@section('title', 'Detail Bus')
@section('judulhalaman', 'Detail Data Bus')

@section('konten')

    <div class="container-fluid">
        @foreach ($bus as $b)

        <ul class="list-group">
            <li class="list-group-item">
                <label for="merkbus">Merk Bus</label>
                <p>{{ $b->merkbus }}</p>
            </li>
            <li class="list-group-item">
                <label for="jumlahbus">Jumlah Bus</label>
                <p>{{ number_format($b->jumlahbus,0,',','.') }}</p>
            </li>
            <li class="list-group-item">
                <label for="tersedia">Tersedia</label>
                <p>{{ $b->tersedia }}</p>
            </li>
        </ul>
            <p class="pt-1">
                <label>Keterangan Tersedia:</label> <br>
                Y : Ya <br>
                T : Tidak <br>
                </p>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/bus" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        @endforeach
    </div>
@endsection
