<?php

namespace App\Http\Controllers;

use DB;
use App\Models\User;
use App\Models\Petisi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function getDataPetisi()
	{
		$petisis = Petisi::orderBy('created_at', 'desc')->paginate(10);
		return view('admin.data_petisi')->with('petisis', $petisis);
	}

	public function getDataMahasiswa()
	{
		$users = User::orderBy('nama', 'asc')->paginate(10);
		return view('admin.data_mahasiswa')->with('users', $users);
	}

	public function destroy($id)
	{
		DB::table('petisis')->where('id','=',$id)->delete();
		return redirect()->route('home')->with('info','Petisi Telah Berhasil di Hapus');
	}

}
