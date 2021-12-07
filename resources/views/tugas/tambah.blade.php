@extends('layout.main')

@section('title', 'Tambah Tugas')

@section('judulhalaman', 'Tambah Tugas')

@section('konten')
    <div class="container">
        <form action="/tugas/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="IDPegawai">Nama Pegawai :</label>
                <select name="IDPegawai" id="IDPegawai" class="form-control">
                    @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal dan Waktu :</label>
                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="Tanggal"/>
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
              <label for="NamaTugas">Nama Tugas :</label>
              <input type="text" class="form-control" name="NamaTugas" id="NamaTugas" placeholder="Nama Tugas" required="required">
            </div>
            <p><strong> Status</strong></p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Belum" name="Status" class="custom-control-input" value="B">
                <label class="custom-control-label" for="Belum">Belum</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Proses" name="Status" class="custom-control-input" value="P">
                <label class="custom-control-label" for="Proses">Proses</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Selesai" name="Status" class="custom-control-input" value="S">
                <label class="custom-control-label" for="Selesai">Selesai</label>
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/tugas" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
          </form>
    </div>
@endsection
