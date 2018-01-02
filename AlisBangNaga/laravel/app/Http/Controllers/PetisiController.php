<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Like;
use App\Models\User;
use App\Models\Petisi;
use Illuminate\Http\Request;

class PetisiController extends Controller
{
	public function getPetisi()
	{
		return view('petisi.index');
	}

	public function postPetisi(Request $request)
	{
		$this->validate($request, [
			'judul' => 'required',
			'body' => 'required',
			
		]);

		$file = $request->file('gambar');
		$fileName = $file->getClientOriginalName();
		$request->file('gambar')->move("image/Petisi/", $fileName);
		
		Auth::user()->petisis()->create([
			'judul' => $request->input('judul'),
			'body' => $request->input('body'),
			'gambar' => $fileName,

		]);

		return redirect()->route('petisi.index')->with('info','Petisi berhasil.');
	}

	public function getDetail($petisiID)
	{
		$petisi = Petisi::where('id', $petisiID)->first();
		$petisis = Petisi::orderBy('created_at', 'desc')->paginate(5);
		if (!$petisi) {
            abort(404);
        }

        return view('petisi.detail')->with('petisi', $petisi)->with('petisis', $petisis);
	}

	public function getLike($petisiId, $userId)
    {
        $like = Like::create([
			'user_id' => $userId,
			'likeable_id' => $petisiId,
			'likeable_type' => "App\Models\Petisi",
		]);
		
        return redirect()->back();
    }

    public function getPetisiSaya($username)
	{
		$petisis = Petisi::orderBy('created_at', 'desc')->paginate(10);
		$users = User::where('username', $username)->first();
		return view('petisi.daftar')->with('petisis', $petisis)->with('user', $users);
	}

	public function getEditPetisi($id)
	{
		$petisis = Petisi::where('id', $id)->first();
		return view('petisi.edit')->with('petisi', $petisis);
	}

	public function postEditPetisi(Request $request, $id)
	{
		$this->validate($request, [
			'judul' => 'required',
			'body' => 'required',
		]);

		$update = Petisi::where('id', $id)->first();
		$update->judul = $request['judul'];
		$update->body = $request['body'];
		$update->update();

		return redirect()->route('petisi.detail', ['id' => $update->id])->with('info','Edit Petisi Berhasil.');
	}
}