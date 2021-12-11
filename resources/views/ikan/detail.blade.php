@extends('layout.bahagia')

@section('title', 'Detail Ikan')

@section('judulhalaman', 'Detail Ikan')

@section('konten')


</head>
<body>



	<a href="/ikan"> Kembali</a>

	<br/>
	<br/>

	@foreach($ikan as $p)
	<form action="/ikan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodeikan }}"> <br/>
		Kode Ikan :{{ $p->kodeikan }} <br/>
		Nama Ikan :{{ $p->namaikan }}<br/>
		Jumlah Ikan :{{ $p->jumlahikan }} <br/>
		Kesediaan :{{ $p->tersedia }} <br/>

	</form>
	@endforeach


</body>

@endsection
