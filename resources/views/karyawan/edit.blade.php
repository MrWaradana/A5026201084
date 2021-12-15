@extends('layout.main')

@section('title', 'Edit Karyawan')
@section('judulhalaman', 'Edit Data Karyawan')

@section('konten')

    <div class="container">
        @foreach($karyawan as $k)
        <form action="/karyawan/update" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $k->karyawan_id }}"> --}}
            <div class="form-group">
                <label for="NIP">NIP</label>
                <input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" required="required" value="{{ $k->NIP }}" maxlength="9">
              </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" required="required" value="{{ $k->Nama }}">
            </div>
            <div class="form-group">
                <label for="Pangkat">Pangkat</label>
                <input type="text" class="form-control" name="Pangkat" id="Pangkat" placeholder="Pangkat" required="required" title="masukkan angka saja!" value="{{ $k->Pangkat }}" maxlength="5">
            </div>
            <div class="form-group">
                <label for="Gaji">Gaji</label>
                <input type="text" class="form-control" name="Gaji" id="Gaji" placeholder="Gaji" required="required" title="masukkan angka saja!" value="{{ $k->Gaji }}" maxlength="5" pattern="[0-9]*" title="masukkan angka saja!">
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/karyawan" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
          </form>
          @endforeach
        </div>
@endsection
