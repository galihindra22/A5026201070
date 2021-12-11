@extends('layout.bahagia')

@section('title', 'Edit Ikan')

@section('judulhalaman', 'Edit Ikan')

@section('konten')



	<a href="/ikan"> Kembali</a>

	<br/>
	<br/>

	@foreach($ikan as $p)
	<form action="/ikan/update" method="post">
		{{ csrf_field() }}
		Kode Ikan<input type="int" required="required" name="kodeikan" value="{{ $p->kodeikan }}"> <br/>
		Nama Ikan<input type="text" required="required" name="namaikan" value="{{ $p->namaikan }}"> <br/>
		Jumlah Ikan <input type="int" required="required" name="jumlahikan" value="{{ $p->jumlahikan }}"> <br/>
		Kesediaan<br/>
        <input type="radio" id="sedia" name="tersedia" value="{{ $p->tersedia }}"> <br/>
		<label for="sedia">A</label><br>
        <input type="radio" id="taksedia" name="tersedia" value="{{ $p->tersedia }}"> <br/>
        <label for="taksedia">T</label><br>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


@endsection
