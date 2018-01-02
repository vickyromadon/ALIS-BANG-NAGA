<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
	public function getProfile($username)
	{
		$user = User::where('username', $username)->first();

		return view('profile.index')->with('user', $user);
	}

	public function getEdit()
	{
		return view('profile.edit');
	}

	public function postEdit(Request $request, $username)
	{
		$this->validate($request, [
			'nama' => 'required',
			'jenisKelamin' => 'required',
			'tempatTanggalLahir' => 'required',
			'agama' => 'required',
			'jurusan' => 'required',
			'alamat' => 'required',
			'provinsi' => 'required',
			
		]);

		$update = User::where('username', $username)->first();
		$update->nama = $request['nama'];
		$update->jenisKelamin = $request['jenisKelamin'];
		$update->tempatTanggalLahir = $request['tempatTanggalLahir'];
		$update->agama = $request['agama'];
		$update->jurusan = $request['jurusan'];
		$update->alamat = $request['alamat'];
		$update->provinsi = $request['provinsi'];

		$update->update();

		return redirect()->route('profile.index', ['username' => Auth::user()->username])->with('info','Edit Profile Berhasil.');
	}

	public function getEditFoto()
	{
		return view('profile.editfoto');
	}

	public function postEditFoto(Request $request, $username)
	{

		$file = $request->file('gambar');
		$fileName = $file->getClientOriginalName();
		$request->file('gambar')->move("image/profile/", $fileName);

		$update = User::where('username', $username)->first();
		$update->gambar = $fileName;

		$update->update();

		return redirect()->route('profile.index', ['username' => Auth::user()->username])->with('info','Edit Foto Profile Berhasil.');
	}
}