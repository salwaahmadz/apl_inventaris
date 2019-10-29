<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\ModelUser;
use App\ModelPinjam;
use App\ModelKelas;
use App\ModelJurusan;
use App\ModelInventaris;
use App\ModelJenis;
use App\ModelRuang;
use App\ModelAdmin;
use App\ModelLevel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;

class AdminController extends Controller
{
	// DASHBOARD
	public function index()
	{
		$data_peminjam = DB::table('peminjaman')
		->join('user', 'user.id_user', '=', 'peminjaman.id_user')
		->join('kelas', 'kelas.id_kelas', '=', 'peminjaman.id_kelas')
		->join('jurusan', 'jurusan.id_jurusan', '=','peminjaman.id_jurusan')
		->join('inventaris', 'inventaris.id_inventaris', '=', 'peminjaman.id_inventaris')
		->join('jenis', 'jenis.id_jenis', '=', 'peminjaman.id_jenis')
		->join('ruang', 'ruang.id_ruang', '=', 'peminjaman.id_ruang')
		->join('admin', 'admin.id_admin', '=', 'peminjaman.id_admin')
		->select('peminjaman.*', 'user.nama_user', 'kelas.tingkat_kelas', 'jurusan.nama_jurusan', 'inventaris.nama_barang', 'jenis.nama_jenis', 'ruang.nama_ruang', 'admin.nama_admin')
		->get();

		// var_dump($data_peminjam);
		// return view('admin.admin', compact('data_peminjam'));
		// $data_peminjam = ModelPinjam::all();
		return view('admin.admin', ['data_peminjam' => $data_peminjam]);

	}
	// END DASHBOARD

	// FORM PINJAM
	public function formpinjam()
	{
		$pilihuser		= ModelUser::all();
		$pilihkelas		= ModelKelas::all();
		$pilihjurusan	= ModelJurusan::all();
		$pilihbarang	= ModelInventaris::all();
		$pilihjenis		= ModelJenis::all();
		$pilihruang		= ModelRuang::all();
		$pilihpetugas	= ModelAdmin::all();

		return view('admin.vpinjam', 
			['pilihuser'	=> $pilihuser,
			 'pilihkelas'	=> $pilihkelas,
			 'pilihjurusan'	=> $pilihjurusan,
			 'pilihbarang'	=> $pilihbarang,
			 'pilihjenis'	=> $pilihjenis,
			 'pilihruang'	=> $pilihruang,
			 'pilihpetugas'	=> $pilihpetugas]);
	}
	// END FORM PINJAM

	// PROSES PINJAM
	public function prosespinjam(Request $request)
	{
		DB::table('peminjaman')
			->insert([
				'id_user'				=> $request->pilihuser,
				'id_kelas'				=> $request->pilihkelas,
				'id_jurusan'			=> $request->pilihjurusan,
				'id_inventaris'			=> $request->pilihbarang,
				'id_jenis'				=> $request->pilihjenis,
				'kuantitas'				=> $request->kuantitas,
				'id_ruang'				=> $request->pilihruang,
				'id_admin'				=> $request->pilihpetugas,
				'status'				=> $request->status
					]);
		return redirect('/admin')->with('sukses', "Proses peminjaman berhasil!");
	
			}

	// END PROSES PINJAM

	//FORM KEMBALIAN
	public function formkembalian($id_peminjaman)
	{

		// $pengembalian = DB::table('peminjaman')->where('id_peminjaman', $id_peminjaman)->get();
		// return view ('admin.vkembalian', ['pengembalian' => $pengembalian]);


		// $pengembalian 		= ModelPinjam::find($id_peminjaman);
		// // $pilihuser		= ModelUser::all();
		// // $pilihbarang		= ModelInventaris::all();
		// // $id_pengembalian = \App\ 
		// return view('admin/formkembalian', 
		// 	[
		// 	// 'pilihuser'		=> $pilihuser,
		// 	// 'pilihbarang'	=> $pilihbarang,
		// 	'pengembalian' => $pengembalian
		// 	]);
	}
	//END FORM KEMBALIAN

	// DAFTAR BARANG
	public function daftarbarang()
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
				'kuantitas'		=> $request->kuantitas_barang
					]);

		return redirect('/daftarbarang')->with('sukses', "Berhasil mendaftarkan barang!");
	}

	// END TAMBAH BARANG

	// DAFTAR JENIS
	public function daftarjenis(Request $request){
		$daftar_jenis = DB::table('jenis')
		->select('jenis.*')
		->get();

		return view('admin.vdaftarjenis', ['daftar_jenis' => $daftar_jenis]);
	}
	// END DAFTAR JENIS

	// TAMBAH JENIS
	public function tambah_jenis(Request $request){
		DB::table('jenis')
			->insert([
				'nama_jenis'	=> $request->njenis,
				'kondisi'		=> $request->kondisibarang
			]);
		return redirect('/daftarjenis')->with('sukses', "Berhasil mendaftarkan jenis barang!");
	}
	// END TAMBAH JENIS

	// DAFTAR RUANGAN
	public function daftarruang(Request $request){
		$daftar_ruang = DB::table('ruang')
		->select('ruang.*')
		->get();

		return view('admin.vdaftarruang', ['daftar_ruang' => $daftar_ruang]);
	}
	// END DAFTAR RUANGAN

	// TAMBAH RUANGAN
	public function tambah_ruang(Request $request){
		DB::table('ruang')
			->insert([
				'nama_ruang'	=> $request->nruangan
			]);
		return redirect('/daftarruang')->with('sukses', "Berhasil mendaftarkan ruangan baru!");
	}
	// TAMBAH RUANGAN

	// DAFTAR USER
	public function daftaruser(Request $request){
		$daftar_user = DB::table('user')
		->join('kelas', 'kelas.id_kelas', '=', 'user.id_kelas')
		->join('jurusan', 'jurusan.id_jurusan', '=','user.id_jurusan')
		->select('user.*', 'kelas.tingkat_kelas', 'jurusan.nama_jurusan')
		->get();
		$pilihkelas = ModelKelas::all();
		$pilihjurusan = ModelJurusan::all();

		return view('admin.vdaftaruser', 
			[
				'daftar_user'	=> $daftar_user, 
				'pilihkelas'	=> $pilihkelas, 
				'pilihjurusan'	=> $pilihjurusan]);
	}
	// END DAFTAR USER

	// TAMBAH USER
	public function tambah_user(Request $request){
		$this->validate($request,[
		'namauser'      => 'required',
        'kelas'         => 'required',
        'jurusan'       => 'required',
        'username'      => 'required',
        'password'      => 'required',
        'confirmation'  => 'required|same:password',
    ]);

    $data =  new ModelUser();
    $data->nama_user = $request->namauser;
    $data->id_kelas = $request->kelas;
    $data->id_jurusan = $request->jurusan;
    $data->username = $request->username;
    $data->password = bcrypt($request->password);
    $data->id_level = $request->level;
    $data->save();

    return redirect('/daftaruser')->with('sukses','Berhasil Menambahkan Pengguna Baru');
	}
	// END TAMBAH USER

	// LOGIN POST

	// END LOGIN POST


	// REGISTRASI
	// 	public function registrasi()
	// {
	// 	$pilihkelas		= ModelKelas::all();
	// 	$pilihjurusan	= ModelJurusan::all();
	// 	$pilihlevel		= ModelLevel::all();
	// 	return view('/register', 
	// 		['pilihkelas' 	=> $pilihkelas,
	// 		 'pilihjurusan'	=> $pilihjurusan,
	// 		 'pilihlevel'	=> $pilihlevel]);
	// }
	// END REGISTRASI
}