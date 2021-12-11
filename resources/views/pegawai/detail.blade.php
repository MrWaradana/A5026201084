@extends('layout.main')

@section('title', 'Detail Pegawai')
@section('judulhalaman', 'Detail Data Pegawai')

@section('konten')

    <div class="container-fluid">
        @foreach ($pegawai as $p)


            <div class="form-group">
                <label for="nama">Nama</label>
                <p>{{ $p->pegawai_nama }}</p>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <p>{{ $p->pegawai_jabatan }}</p>
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <p>{{ $p->pegawai_umur }}</p>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <p>{{ $p->pegawai_alamat }}</p>
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/pegawai" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>

        @endforeach
    </div>
@endsection
