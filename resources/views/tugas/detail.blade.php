@extends('layout.main')

@section('title', 'Detail Tugas')
@section('judulhalaman', 'Detail Data Tugas')

@section('konten')

    <div class="container-fluid">
        @foreach ($tugas as $t)
        <ul class="list-group">
            <li class="list-group-item">
                <label for="pegawai_nama">Nama Pegawai :</label>
                <p>{{ $t->pegawai_nama}}</p>
            </li>
            <li class="list-group-item">
                <label for="tanggal">Tanggal dan Waktu :</label>
                <p>{{ $t->Tanggal }}</p>
            </li>
            <li class="list-group-item">
                <label for="namatugas">Nama Tugas :</label>
                <p>{{ $t->NamaTugas }}</p>
            </li>
            <li class="list-group-item">
                <label for="status">Status :</label>
                <p>{{ $t->Status }}</p>
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
                <a href="/tugas" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        @endforeach
    </div>
@endsection
