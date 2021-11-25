<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>

	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		ID<input type="int" required="required" name="id" value="{{ $p->tugas_id }}"> <br/>
		ID Pegawai<input type="int" required="required" name="pid" value="{{ $p->tugas_pid }}"> <br/>
		Tanggal <input type="date" required="required" name="tgl" value="{{ $p->tugas_tgl }}"> <br/>
		Nama Tugas <input type="text" required="required" name="ntugas" value="{{ $p->tugas_ntugas }}"> <br/>
		Status<input type="text" required="required" name="status" value="{{ $p->tugas_status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
