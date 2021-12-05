@extends('layout.main')

@section('title', 'Menambah Absen')
@section('judulhalaman', 'Menambah Data Absen')

@section('konten')
    {{-- form starts here --}}
    <form action="/absen/store" method="post">

        {{ csrf_field() }}

        {{-- select pegawai starts here --}}
        <label for="idpegawai">IDPegawai:</label>
        <select name="idpegawai" id="idpegawai">
            @foreach($pegawai as $p)
            <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        {{-- select pegawai ends here --}}

        <br>

        {{-- datetime starts here --}}
        <div class="form-group">
            <label>Tanggal dan Waktu :</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="tanggal"/>
                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        {{-- datetime ends here --}}

        {{-- status radiobox starts here --}}
        <label for="status">Status :</label>
        <br>
        <input type="radio" id="Hadir" name="status" value="H">
        <label for="Hadir">Hadir</label><br>
        <input type="radio" id="Izin" name="status" value="I">
        <label for="Izin">Izin</label><br>
        <input type="radio" id="Sakit" name="status" value="S" checked="checked">
        <label for="Sakit">Sakit</label><br>
        <input type="radio" id="Alpha" name="status" value="A">
        <label for="Alpha">Alpha</label>
        {{-- status radiobox ends here --}}

        <p><input type="submit" value="Simpan Data"></p>

    </form>
    {{-- form ends here --}}

    <h2><a href="/absen"> Kembali</a></h2>


    
@endsection

