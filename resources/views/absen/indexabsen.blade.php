<!DOCTYPE html>
<html>
<head>
	<title>CRUD Tabel Absen</title>
</head>
<body>

	<h2>Daftar Absensi Pegawai</h2>


	<a href="/absen/add"> + Tambah Absensi</a>

	<br/>
	<br/>

	<table border="1">
		<tr>

			<th>IDPegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->IDPegawai }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
				<a href="/absen/edit/{{ $a->ID }}">Edit Absensi</a>
				|
				<a href="/absen/hapus/{{ $a->ID }}">Delete Absensi</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        H : Hadir <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

</body>
</html>
