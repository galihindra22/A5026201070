<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
    	return view('keranjangbelanja.index',['keranjangbelanja' => $keranjangbelanja]);

    }
    public function tambah()
    {


	return view('keranjangbelanja.tambah');

    }


    public function store(Request $request)
    {

	    DB::table('keranjangbelanja')->insert([
		    'ID' => $request->id,
		    'KodeBarang' => $request->kbarang,
		    'Jumlah' => $request->jumlah,
		    'Harga' => $request->harga,
	    ]);

	    return redirect('/keranjangbelanja');

    }
    public function hapus($id)
    {

	    DB::table('keranjangbelanja')->where('ID',$id)->delete();


	    return redirect('/keranjangbelanja');
    }
}
