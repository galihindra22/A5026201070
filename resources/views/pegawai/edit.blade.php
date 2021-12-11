@extends('layout.bahagia')

@section('title', 'Edit Pegawai')

@section('judulhalaman', 'Edit Pegawai')

@section('konten')


</head>
<body>



	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
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
	@endforeach


</body>

@endsection
