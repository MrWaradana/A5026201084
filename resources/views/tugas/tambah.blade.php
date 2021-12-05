@extends('layout.main')

@section('title', 'Tambah Tugas')

@section('judulhalaman', 'Tambah Tugas')

@section('konten')
	<a href="/tugas"> Kembali</a>


	<form action="/tugas/store" method="post">
		{{ csrf_field() }}

        {{-- select pegawai starts here --}}
        <label for="IDPegawai">IDPegawai:</label>
        <select name="IDPegawai" id="IDPegawai">
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
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="Tanggal"/>
                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        {{-- datetime ends here --}}
        <br/>

		NamaTugas <input type="text" maxlength="50" name="NamaTugas" required="required"> <br/>
		Status <input type="text" maxlength="1" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
