<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {

    	//$tugas = DB::table('tugas')->get();
        $tugas = DB::table('tugas')
            ->join('pegawai', 'tugas.IDPegawai', '=', 'pegawai.pegawai_id')
            ->select('tugas.*', 'pegawai.pegawai_nama')
            ->paginate();

    	return view('tugas.index',['tugas' => $tugas]);

    }

    public function tambah()
    {


	return view('tugas.tambah');

    }


    public function store(Request $request)
    {

	    DB::table('tugas')->insert([
		    'ID' => $request->id,
		    'IDPegawai' => $request->pid,
		    'Tanggal' => $request->tgl,
		    'NamaTugas' => $request->ntugas,
            'Status' => $request->status,
	    ]);

	    return redirect('/tugas');

    }
    public function edit($id)
    {

	    $tugas = DB::table('tugas')->where('ID',$id)->get();

	    return view('tugas.edit',['tugas' => $tugas]);

    }
    public function update(Request $request)
    {

	    DB::table('tugas')->where('ID',$request->id)->update([
		    'ID' => $request->id,
		    'IDPegawai' => $request->pid,
		    'Tanggal' => $request->tgl,
		    'NamaTugas' => $request->ntugas,
            'Status' => $request->status,
	    ]);

    	return redirect('/tugas');
    }
    public function hapus($id)
    {

	    DB::table('tugas')->where('ID',$id)->delete();


	    return redirect('/tugas');
    }
}
