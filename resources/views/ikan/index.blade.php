@extends('layout.bahagia')

@section('title', 'Ikan')

@section('judulhalaman', 'Data Ikan')

@section('konten')


</head>
<body>



	<a href="/ikan/tambah"> + Tambah Ikan Baru</a>

	<br/>
	<br/>
    <div class="container" align="center">
        <form action="/ikan/cari" method="GET">
            <input type="text" class="form-control" name="cari" placeholder="Cari Ikan berdasarkan  nama" value="{{ old('cari') }}">
            <input type="submit" class="btn btn-default" value="CARI">
        </form>
    </div>

	<table border="1">
		<tr>
			<th>Kode Ikan</th>
			<th>Nama Ikan</th>
			<th>Jumlah Ikan</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($ikan as $p)
		<tr>
			<td>{{ $p->kodeikan}}</td>
			<td>{{ $p->namaikan }}</td>
			<td>{{ $p->jumlahikan }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                <a href="/ikan/view/{{ $p->kodeikan }}">View Detail</a>
                |
				<a href="/ikan/edit/{{ $p->kodeikan }}">Edit</a>
				|
				<a href="/ikan/hapus/{{ $p->kodeikan }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$ikan->links()}}

</body>

@endsection
