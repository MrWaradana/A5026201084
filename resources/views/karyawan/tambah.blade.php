@extends('layout.main')

@section('title', 'Tambah Karyawan')
@section('judulhalaman', 'Tambah Karyawan')

@section('konten')

    <div class="container">
        <form action="/karyawan/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" required="required"
                    maxlength="9">
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" required="required">
            </div>
            <div class="form-group">
                <label for="Pangkat">Pangkat</label>
                <input type="text" class="form-control" name="Pangkat" id="Pangkat" placeholder="Pangkat"
                    required="required" maxlength="5">
            </div>
            <div class="form-group">
                <label for="Gaji">Gaji</label>
                <input type="text" class="form-control" name="Gaji" id="Gaji" placeholder="Gaji" pattern="[0-9]*"
                    required="required" title="masukkan angka saja!" maxlength="11">
            </div>
            <div class="form-group d-flex justify-content-between">
                <a href="/karyawan" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
        </form>
    </div>

@endsection
