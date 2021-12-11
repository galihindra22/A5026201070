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
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama :{{ $p->pegawai_nama }} <br/>
		Jabatan :{{ $p->pegawai_jabatan }}<br/>
		Umur :{{ $p->pegawai_umur }} <br/>
		Alamat :{{ $p->pegawai_alamat }} <br/>

	</form>
	@endforeach


</body>

@endsection
