@extends('layout.main')

@section('title', 'Menambah Absen')

@section('judulhalaman', 'Menambah Data Absen')

@section('konten')

    <div class="container">
        <form action="/absen/store" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="idpegawai">Nama Pegawai :</label>
                <select name="idpegawai" id="idpegawai" class="form-control">
                    @foreach($pegawai as $p)
                    <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal dan Waktu :</label>
                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="tanggal" id="tanggal"/>
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <p><strong> Status</strong></p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Hadir" name="status" class="custom-control-input" value="H">
                <label class="custom-control-label" for="Hadir">Hadir</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Izin" name="status" class="custom-control-input" value="I">
                <label class="custom-control-label" for="Izin">Izin</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Sakit" name="status" class="custom-control-input" value="S">
                <label class="custom-control-label" for="Sakit">Sakit</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Alpha" name="status" class="custom-control-input" value="A">
                <label class="custom-control-label" for="Alpha">Alpha</label>
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/absen" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
          </form>
    </div>
@endsection

