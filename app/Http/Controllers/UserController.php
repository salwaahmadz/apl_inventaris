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
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
    	if (!Session::get('ulogin')){
    		return redirect('ulogin')->with('gagal', "Anda Harus Login terlebih dahulu!");
    	}else{
    		return view('user.user');
    	}
    }

    // FORM PINJAM
	public function formpinjamuser()
	{
		$pilihuser		= ModelUser::all();
		$pilihkelas		= ModelKelas::all();
		$pilihjurusan	= ModelJurusan::all();
		$pilihbarang	= ModelInventaris::all();
		$pilihjenis		= ModelJenis::all();
		$pilihruang		= ModelRuang::all();
		$pilihpetugas	= ModelAdmin::all();

		return view('user.vupinjam', 
			['pilihuser'	=> $pilihuser,
			 'pilihkelas'	=> $pilihkelas,
			 'pilihjurusan'	=> $pilihjurusan,
			 'pilihbarang'	=> $pilihbarang,
			 'pilihjenis'	=> $pilihjenis,
			 'pilihruang'	=> $pilihruang,
			 'pilihpetugas'	=> $pilihpetugas]);

		return view('user.vupinjam');
	}
	// END FORM PINJAM

	// PROSES PINJAM
	public function prosespinjamuser(Request $request)
	{
		DB::table('peminjaman')->insert([
			'id_user'		=> $request->pilihuser,
			'id_kelas'		=> $request->pilihkelas,
			'id_jurusan'	=> $request->pilihjurusan,
			'id_inventaris'	=> $request->pilihbarang,
			'id_jenis'		=> $request->pilihjenis,
			'kuantitas'		=> $request->kuantitas,
			'id_ruang'		=> $request->pilihruang,
			'id_admin'		=> $request->pilihpetugas
		]);

		return redirect('/user')->with('sukses', "Proses peminjaman berhasil!");
	}
	// END PROSES PINJAM

	// REGISTRASI
	public function registrasi()
	{
		$pilihkelas		= ModelKelas::all();
		$pilihjurusan	= ModelJurusan::all();
		$pilihlevel		= ModelLevel::all();
		return view('user.uregister', 
			['pilihkelas' 	=> $pilihkelas,
			 'pilihjurusan'	=> $pilihjurusan,
			 'pilihlevel'	=> $pilihlevel]);
	}
	// END REGISTRASI

	// PROSES REGISTRASI
	public function registrasipost(Request $request)
	{
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

    return redirect('/ulogin')->with('sukses','Kamu berhasil Register');
	}
	// END REGISTRASI

	// LOGIN POST

	public function loginpost(Request $request)
	{
		$username		= $request->username;
		$password		= $request->password;
		$proseslogin	= ModelUser::where('username', $username)->first();
		// dd($proseslogin);
		if($proseslogin){
        if(Hash::check($password,		$proseslogin->password)){
            Session::put('nama_user',	$proseslogin->namauser);
            Session::put('username',	$proseslogin->username);
            Session::put('user.ulogin', TRUE);
            return view('user.user');
        }else{
            return redirect('/ulogin')->with('gagal', "Username atau Password yang anda masukan salah");
        	}
    	}else{
            return redirect('/ulogin')->with('gagal', "Username atau Password yang anda masukan salah");
        	} 
	}
	// END LOGIN POST

	// LOG OUT
	public function logoutuser()
	{
    Session::flush();
    return redirect ('/ulogin')->with('gagal', "Anda telah Log Out! Silahkan Login kembali");
	}
	// END LOG OUT
}
