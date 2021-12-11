@extends('layout.bahagia')

@section('title', 'Tambah Ikan')

@section('judulhalaman', 'Tambah Ikan')

@section('konten')


<head>

</head>
<body>


	<h3>Data Ikan</h3>

	<a href="/ikan"> Kembali</a>

	<br/>
	<br/>

	<form action="/ikan/store" method="post">
		{{ csrf_field() }}
		Kode Ikan<input type="text" name="kodeikan" required="required"> <br/>
		Nama Ikan <input type="text" name="namaikan" required="required"> <br/>
		Jumlah Ikan <input type="number" name="jumlahikan" required="required"> <br/>
		Kesediaan Ikan<br/>
        <input type="radio" id="sedia" name="kesediaan" value="A" > <br/>
        <label for="sedia">A</label><br>
        <input type="radio" id="taksedia" name="kesediaan" value="T" > <br/>
        <label for="taksedia">T</label><br>
        Keterangan :<br/>
        Tersedia = A<br/>
        Tidak Tersedia = T<br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>

@endsection
