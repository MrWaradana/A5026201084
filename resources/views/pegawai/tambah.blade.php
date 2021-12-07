@extends('layout.main')

@section('title', 'Tambah Pegawai')
@section('judulhalaman', 'Tambah Pegawai')

@section('konten')

<div class="container">
    <form  action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="required">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" required="required">
        </div>
        <div class="form-group">
          <label for="umur">Umur</label>
          <input type="text" class="form-control" name="umur" id="umur" placeholder="Umur" pattern="[0-9]*" required="required" title="masukkan angka saja!">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat" rows="3" required="required"></textarea>
        </div>
        <div class="form-group d-flex justify-content-between">
            <a href="/pegawai" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
            <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
        </div>
      </form>
</div>

@endsection
