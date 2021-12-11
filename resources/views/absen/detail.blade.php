@extends('layout.main')

@section('title', 'Detail Absen')
@section('judulhalaman', 'Detail Data Absen')

@section('konten')

    <div class="container-fluid">
        @foreach ($absen as $a)

            <div class="form-group">
                <label for="pegawai_nama">Nama Pegawai</label>
                <p>{{ $a->pegawai_nama}}</p>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal</label>
                <p>{{ $a->Tanggal }}</p>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <p>{{ $a->Status }}</p>
            </div>
            <p class="pt-1">
                Keterangan Status: <br>
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
