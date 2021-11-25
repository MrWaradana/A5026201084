<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h1>Tugas PWEB 25 Nov 2021</h1>
	<h2>5026201084 - Muhammad Ridho Waradana - PWEB A</h2>
	<h3>Data Tugas</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		IDPegawai <input type="text" name="IDPegawai" required="required"> <br/>
		Tanggal <input type="datetime-local" max name="Tanggal" required="required"> <br/>
		NamaTugas <input type="text" maxlength="50" name="NamaTugas" required="required"> <br/>
		Status <input type="text" maxlength="1" name="Status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
