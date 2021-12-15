@extends('layout.main')

@section('title', 'Detail Absen')
@section('judulhalaman', 'Detail Data Absen')

@section('konten')

    <div class="container-fluid">
        @foreach ($absen as $a)
        <ul class="list-group">
            <li class="list-group-item">
                <label for="pegawai_nama">Nama Pegawai</label>
                <p>{{ $a->pegawai_nama}}</p>
            </li>
            <li class="list-group-item">
                <label for="tanggal">Tanggal</label>
                <p>{{ $a->Tanggal }}</p>
            </li>
            <li class="list-group-item">
                <label for="status">Status</label>
                <p>{{ $a->Status }}</p>
            </li>
        </ul>
            <p class="pt-1">
               <label> Keterangan Status: </label><br>
                H : Hadir <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
                </p>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/absen" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        @endforeach
    </div>
@endsection
