<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Petisi;
use Illuminate\Http\Request;

class SearchController extends Controller
{
	public function getCariPetisi()
	{
		$petisis = Petisi::orderBy('created_at', 'desc')->paginate(5);
		return view('petisi.cari')->with('petisis', $petisis);
	}

	public function getHasilPetisi(Request $request)
	{
		$query = $request->input('query');

		if (!$query){
			return redirect()->route('petisi.cari');
		}

		$petisis = Petisi::Where('judul', 'LIKE', "%{$query}%")->orderBy('judul', 'asc')->paginate(3);

		return view('petisi.cari')->with('petisis', $petisis);
	}

	public function getCariProfil()
	{
		$users = User::orderBy('nama', 'asc')->paginate(8);

		return view('profile.cari')->with('users', $users);
	}

	public function getHasilProfil(Request $request)
	{
		$query = $request->input('query');

		if (!$query){
			return redirect()->route('profil.cari');
		}

		$users = User::Where('nama', 'LIKE', "%{$query}%")->orderBy('nama', 'asc')->paginate(8);

		return view('profile.cari')->with('users', $users);
	}

	public function getHasilProvinsiProfil(Request $request)
	{
		$users = User::where('provinsi', $request->input('provinsi'))->orderBy('nama', 'asc')->paginate(8);

		return view('profile.cari')->with('users', $users);
	}
}
