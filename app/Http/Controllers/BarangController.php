<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ModelJenis;
use App\ModelInventaris;

class BarangController extends Controller
{
    // DAFTAR BARANG
	public function daftar_barang()
	{
		$daftar_barang = DB::table('inventaris')
		->join('jenis', 'jenis.id_jenis', '=', 'inventaris.id_jenis')
		->select('inventaris.*', 'jenis.nama_jenis')
		->get();
		$pilihjenis = ModelJenis::all();

		// return view('admin.vdaftarbarang', ['pilihjenis' => $pilihjenis]);
		return view('admin.vdaftarbarang', ['daftar_barang' => $daftar_barang, 'pilihjenis' => $pilihjenis]);
	}
	// END DAFTAR BARANG

	// TAMBAH BARANG

	public function tambah_barang(Request $request)
	{
		DB::table('inventaris')
			->insert([
				'nama_barang'	=> $request->nbarang,
				'id_jenis'		=> $request->jbarang,
				'kondisi'		=> $request->kondisi_barang,
				'stok_barang'	=> $request->kuantitas_barang
					]);

		return redirect('/daftarbarang')->with('sukses', "Berhasil mendaftarkan barang!");
	}

	// END TAMBAH BARANG

	// EDIT DATA BARANG
		public function edit_barang($id_inventaris){
			$barang = ModelInventaris::find('id_inventaris', $id_inventaris);
			return view('admin.editbarang', ['barang' => $barang]);
		}
	// END EDIT DATA BARANG

	// FUNGSI DELETE

	public function delete_barang($id_inventaris){
		DB::table('inventaris')
		->where('id_inventaris', $id_inventaris)
		->delete();

		return redirect('/daftarbarang')->with('sukses', "Data Barang berhasil dihapus");
	}

	// END FUNGSI DELETE
}
