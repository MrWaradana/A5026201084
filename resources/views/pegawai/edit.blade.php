@extends('layout.main')

@section('title', 'Edit Pegawai')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')

    <div class="container">
        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="required" value="{{ $p->pegawai_nama }}">
              </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" required="required" value="{{ $p->pegawai_jabatan }}">
            </div>
            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" pattern="[0-9]*" required="required" title="masukkan angka saja!" value="{{ $p->pegawai_umur }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" rows="3" required="required">{{ $p->pegawai_alamat }}</textarea>
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/pegawai" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
          </form>
          @endforeach
        </div>
@endsection
