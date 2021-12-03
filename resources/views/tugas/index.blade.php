@extends('layout.bahagia')

@section('title', 'Tabel Tugas')

@section('judulhalaman', 'Tabel Tugas')

@section('konten')
	<a href="/tugas/tambah"> + Tambah Tugas Baru</a>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>NamaTugas</th>
			<th>Status</th>
		</tr>
		@foreach($tugas as $t)
		<tr>
			<td>{{ $t->IDPegawai }}</td>
			<td>{{ $t->Tanggal }}</td>
			<td>{{ $t->NamaTugas }}</td>
			<td>{{ $t->Status }}</td>
			<td>
				<a href="/tugas/edit/{{ $t->ID }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $t->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
