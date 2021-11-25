<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	<form action="/tugas/store" method="post">
		{{ csrf_field() }}
		ID <input type="int" name="id" required="required"> <br/>
		ID Pegawai<input type="int" name="pid" required="required"> <br/>
        Tanggal<input type="date" name="tgl" required="required"> <br/>
		Nama Tugas <input type="text" name="ntugas" required="required"> <br/>
		Status<input type="text" name="status" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
