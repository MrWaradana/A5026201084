<!DOCTYPE html>
<html>
<head>
	<title>Tabel Tugas</title>
</head>
<body>

	<h1>Tugas PWEB 25 Nov 2021</h1>
	<h2>5026201084 - Muhammad Ridho Waradana - PWEB A</h2>
	<h3>Edit Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $t)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $t->ID }}"> <br/>
		IDPegawai <input type="number" required="required" name="IDPegawai" value="{{ $t->IDPegawai }}"> <br/>
		Tanggal <input type="datetime-local" required="required" name="Tanggal" value="{{ date('Y-m-d\TH:i', strtotime($t->Tanggal)) }}"> <br/>
		NamaTugas <input type="text" maxlength="50" required="required" name="NamaTugas" value="{{ $t->NamaTugas }}"> <br/>
		Status <input type="text" maxlength="1" required="required" name="Status" value="{{  $t->Status  }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
