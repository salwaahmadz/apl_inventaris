<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
    	return view('user.user');
    }

    // FORM PINJAM
	public function formpinjamuser()
	{
		return view('user.vcpinjam');
	}
	// END FORM PINJAM
}
