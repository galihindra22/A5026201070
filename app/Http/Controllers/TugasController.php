<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {

    	$tugas = DB::table('tugas')->get();


    	return view('tugas.index',['tugas' => $tugas]);

    }

    public function tambah()
    {


	return view('tugas.tambah');

    }


    public function store(Request $request)
    {

	    DB::table('tugas')->insert([
		    'tugas_id' => $request->id,
		    'tugas_pid' => $request->pid,
		    'tugas_tgl' => $request->tgl,
		    'tugas_ntugas' => $request->ntugas,
            'tugas_status' => $request->status,
	    ]);

	    return redirect('/tugas');

    }
    public function edit($id)
    {

	    $tugas = DB::table('tugas')->where('tugas_id',$id)->get();

	    return view('tugas.edit',['tugas' => $tugas]);

    }
    public function update(Request $request)
    {

	    DB::table('tugas')->where('tugas_id',$request->id)->update([
		    'tugas_id' => $request->id,
		    'tugas_pid' => $request->pid,
		    'tugas_tgl' => $request->tgl,
		    'tugas_ntugas' => $request->ntugas,
            'tugas_status' => $request->status,
	    ]);

    	return redirect('/tugas');
    }
    public function hapus($id)
    {

	    DB::table('tugas')->where('tugas_id',$id)->delete();


	    return redirect('/tugas');
    }
}
