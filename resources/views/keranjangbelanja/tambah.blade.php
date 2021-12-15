@extends('layout.bahagia')

@section('title', 'Tambah Belanja')

@section('judulhalaman', 'Tambah Belanja')

@section('konten')

	<a href="/keranjangbelanja"> Kembali</a>

	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		Kode Pembelian<input type="int" name="id" required="required"> <br/>
		Kode Barang<input type="int" name="kbarang" required="required"> <br/>
        Jumlah Pembelian<input type="int" name="jumlah" required="required"> <br/>
		Harga per Item <input type="int" name="harga" required="required"> <br/>

		<input type="submit" value="Simpan Data">
	</form>

@endsection
