<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IkanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table ikan
    	//$ikan = DB::table('ikan')->get();
        return view('ikan.index', [
            'ikan' => DB::table('ikan')->paginate(5)
        ]);
    }
    public function tambah()
    {

	    return view('ikan.tambah');

    }
    public function store(Request $request)
    {

	    DB::table('ikan')->insert([
		    'kodeikan' => $request->kodeikan,
		    'namaikan' => $request->namaikan,
		    'jumlahikan' => $request->jumlahikan,
		    'tersedia' => $request->kesediaan,

	    ]);

	    return redirect('/ikan');

    }
    public function edit($id)
    {

	    $ikan = DB::table('ikan')->where('kodeikan',$id)->get();

	    return view('ikan.edit',['ikan' => $ikan]);

    }
    public function update(Request $request)
    {

	    DB::table('ikan')->where('kodeikan',$request->kodeikan)->update([
		    'kodeikan' => $request->kodeikan,
		    'namaikan' => $request->namaikan,
		    'jumlahikan' => $request->jumlahikan,
		    'tersedia' => $request->tersedia,

	    ]);

    	return redirect('/ikan');
    }
    public function hapus($id)
    {

	    DB::table('ikan')->where('kodeikan',$id)->delete();


	    return redirect('/ikan');
    }
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$ikan = DB::table('ikan')
		->where('namaikan','like', "%" . $cari . "%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('ikan.index',['ikan' => $ikan]);

	}
    public function detail($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $ikan = DB::table('ikan')->where('kodeikan', $id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('ikan.detail', ['ikan' => $ikan]);
    }
}
