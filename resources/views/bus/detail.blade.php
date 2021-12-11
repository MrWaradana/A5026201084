@extends('layout.main')

@section('title', 'Detail Bus')
@section('judulhalaman', 'Detail Data Bus')

@section('konten')

    <div class="container-fluid">
        @foreach ($bus as $b)


            <div class="form-group">
                <label for="merkbus">Merk Bus</label>
                <p>{{ $b->merkbus }}</p>
            </div>
            <div class="form-group">
                <label for="jumlahbus">Jumlah Bus</label>
                <p>{{ $b->jumlahbus }}</p>
            </div>
            <div class="form-group">
                <label for="tersedia">Tersedia</label>
                <p>{{ $b->tersedia }}</p>
            </div>
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
