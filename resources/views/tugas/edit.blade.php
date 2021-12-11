@extends('layout.main')

@section('title', 'Edit Tugas')

@section('judulhalaman', 'Edit Tugas')

@section('konten')

    <div class="container">
        @foreach($tugas as $t)
        <form action="/tugas/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->ID }}">
            <div class="form-group">
                <label for="IDPegawai">Nama Pegawai:</label>
                <select name="IDPegawai" id="IDPegawai" class="form-control">
                    @foreach($pegawai as $p)
                     <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tanggal dan Waktu :</label>
                <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="Tanggal" value="{{ $t ->Tanggal }}"/>
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="NamaTugas">Nama Tugas :</label>
                <input type="text" class="form-control" name="NamaTugas" id="NamaTugas" placeholder="Nama Tugas" required="required" value="{{ $t->NamaTugas }}" maxlength="50">
              </div>
            <p><strong> Status</strong></p>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Belum" name="Status" class="custom-control-input" value="B" @if ($t->Status === "B" ) checked="checked" @endif>
                <label class="custom-control-label" for="Belum">Belum</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Proses" name="Status" class="custom-control-input" value="P" @if ($t->Status === "P" ) checked="checked" @endif>
                <label class="custom-control-label" for="Proses">Proses</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="Selesai" name="Status" class="custom-control-input" value="S" @if ($t->Status === "S" ) checked="checked" @endif>
                <label class="custom-control-label" for="Selesai">Selesai</label>
            </div>
            <div class="form-group d-flex justify-content-between mt-4">
                <a href="/tugas" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Simpan Data </button>
            </div>
          </form>
          @endforeach
        </div>
@endsection

