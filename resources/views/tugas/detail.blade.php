@extends('layout.main')

@section('title', 'Detail Tugas')
@section('judulhalaman', 'Detail Data Tugas')

@section('konten')

    <div class="container-fluid">
        @foreach ($tugas as $t)

            <div class="form-group">
                <label for="pegawai_nama">Nama Pegawai :</label>
                <p>{{ $t->pegawai_nama}}</p>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal dan Waktu :</label>
                <p>{{ $t->Tanggal }}</p>
            </div>
            <div class="form-group">
                <label for="namatugas">Nama Tugas :</label>
                <p>{{ $t->NamaTugas }}</p>
            </div>
            <div class="form-group">
                <label for="status">Status :</label>
                <p>{{ $t->Status }}</p>
            </div>
            <p class="pt-1">
               <label> Keterangan Status: </label><br>
                H : Hadir <br>
                I : Izin <br>
                S : Sakit <br>
                A : Alpha <br>
                </p>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/tugas" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        @endforeach
    </div>
@endsection
