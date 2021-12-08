@extends('layout.bahagia')

@section('title', 'Tambah Tugas')

@section('judulhalaman', 'Tambah Tugas')

@section('konten')
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

@endsection
