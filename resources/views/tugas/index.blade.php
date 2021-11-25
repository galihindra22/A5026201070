<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h3>Data Tugas</h3>

	<a href="/tugas/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>ID</th>
			<th>ID Pegawai</th>
			<th>Tanggal</th>
			<th>Nama Tugas</th>
			<th>Status</th>
            <th>Opsi</th>
		</tr>
		@foreach($tugas as $p)
		<tr>
			<td>{{ $p->tugas_id }}</td>
			<td>{{ $p->tugas_pid }}</td>
			<td>{{ $p->tugas_tgl }}</td>
			<td>{{ $p->tugas_ntugas }}</td>
            <td>{{ $p->tugas_status }}</td>
			<td>
				<a href="/tugas/edit/{{ $p->tugas_id }}">Edit</a>
				|
				<a href="/tugas/hapus/{{ $p->tugas_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>
