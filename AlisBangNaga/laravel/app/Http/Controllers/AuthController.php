<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	
	public function getDaftar()
	{
		return view('auth.daftar');
	}

	public function postDaftar(Request $request)
	{
		$this->validate($request, [
			'username' => 'required|unique:users|alpha_dash|max:20',
			'nim' => 'required',
			'nama' => 'required',
			'email' => 'required|unique:users',
			'namaPerguruanTinggi' => 'required',
			'password' => 'required|min:6',
			'jabatan' => 'required',
		]);

		$tambah = new User();
		$tambah->username = $request['username'];
		$tambah->nim = $request['nim'];
		$tambah->nama = $request['nama'];
		$tambah->email = $request['email'];
		$tambah->namaPerguruanTinggi = $request['namaPerguruanTinggi'];
		$tambah->password = bcrypt($request['password']);
		$tambah->jabatan = $request['jabatan'];
		$tambah->save();

		return redirect()->route('auth.masuk')->with('info','Akun anda telah berhasil dibuat, anda dapat masuk sekarang.');
	}

	public function getMasuk()
	{
		return view('auth.Masuk');
	}

	public function postMasuk(Request $request)
	{
		$this->validate($request, [
			'username' => 'required',
			'password' => 'required',
		]);

		if(!Auth::attempt($request->only(['username','password']),$request->has('remember'))){
			return redirect()->back()->with('info', 'Username dan Password salah, silahkan periksa kembali.');
		}

		return redirect()->route('home')->with('info','Anda sekarang telah masuk !.');
	}

	public function getKeluar()
	{
		Auth::logout();

		return redirect()->route('home')->with('info','Anda sekarang telah keluar !.');
	}
}