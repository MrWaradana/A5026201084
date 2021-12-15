@extends('layout.main')

@section('title', 'Detail Karyawan')
@section('judulhalaman', 'Detail Data Karyawan')

@section('konten')

    <div class="container-fluid">
        @foreach ($karyawan as $k)


        <ul class="list-group">
            <li class="list-group-item">
                <label for="NIP">NIP</label>
                <p>{{ $k->NIP }}</p>
            </li>
            <li class="list-group-item">
                <label for="Nama">Nama</label>
                <p>{{ $k->Nama }}</p>
            </li>
            <li class="list-group-item">
                <label for="Pangkat">Pangkat</label>
                <p>{{ $k->Pangkat }}</p>
            </li>
            <li class="list-group-item">
                <label for="Gaji">Gaji</label>
                <p>Rp. {{ number_format($k->Gaji,0,',','.') }}</p>
            </li>
        </ul>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/karyawan" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>

        @endforeach
    </div>
@endsection
