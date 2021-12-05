@extends('layout.main')

@section('title', 'Edit Tugas')

@section('judulhalaman', 'Edit Tugas')

@section('konten')
	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>

        <label for="IDPegawai">IDPegawai:</label>
        <select name="IDPegawai" id="IDPegawai">
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $t->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label>Tanggal dan Waktu :</label>
            <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime" name="Tanggal" value="{{ $t ->Tanggal }}"/>
                <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
        </div>
        <br/>
		NamaTugas <input type="text" maxlength="50" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" maxlength="1" required="required" name="Status" value="{{  $t->Status  }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach

@endsection

