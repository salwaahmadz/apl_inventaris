<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
	// DASHBOARD
	public function index()
	{
	
		return view('admin.admin');

	}
	// END DASHBOARD

	// FORM PINJAM
	public function formpinjam()
	{
		return view('admin.vpinjam');
	}
	// END FORM PINJAM

	// PROSES PINJAM
	// public function prosespinjam($Request)
	// {

	// }
	// END PROSES PINJAM
}
