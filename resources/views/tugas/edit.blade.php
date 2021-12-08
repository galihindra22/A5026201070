@extends('layout.bahagia')

@section('title', 'Edit Tugas')

@section('judulhalaman', 'Edit Tugas')

@section('konten')



	<a href="/tugas"> Kembali</a>

	<br/>
	<br/>

	@foreach($tugas as $p)
	<form action="/tugas/update" method="post">
		{{ csrf_field() }}
		ID<input type="int" required="required" name="id" value="{{ $p->ID }}"> <br/>
		ID Pegawai<input type="int" required="required" name="pid" value="{{ $p->IDPegawai }}"> <br/>
		Tanggal <input type="date" required="required" name="tgl" value="{{ $p->Tanggal }}"> <br/>
		Nama Tugas <input type="text" required="required" name="ntugas" value="{{ $p->NamaTugas }}"> <br/>
		Status<input type="text" required="required" name="status" value="{{ $p->Status }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection
