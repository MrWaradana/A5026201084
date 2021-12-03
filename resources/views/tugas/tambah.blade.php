@extends('layout.bahagia')

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
            <label for="dtpickerdemo">Tanggal :</label>
            <div class="input-group date col-sm-2" id="dtpickerdemo">
                <input type="text" class="form-control" name="Tanggal" required="required" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
        {{-- datetime ends here --}}
        <br/>

		NamaTugas <input type="text" maxlength="50" name="NamaTugas" required="required"> <br/>
		Status <input type="text" maxlength="1" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

@endsection
