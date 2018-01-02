<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Like;
use App\Models\Petisi;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{	
	public function index()
	{
		$petisis = Petisi::orderBy('created_at', 'desc')->paginate(3);
		return view('home')->with('petisis', $petisis);
		/**
		*/
	}

	public function terbaru()
	{
		$petisis = Petisi::orderBy('created_at', 'desc')->paginate(4);

		return view('petisi.terbaru')->with('petisis', $petisis);
	}

	public function populer()
	{
		$datas = Petisi::leftJoin('likeable', 'likeable.likeable_id', '=', 'petisis.id')
		    ->select(array('petisis.*', DB::raw('SUM(1) as likeable_average')))
		    ->groupBy('id')
		    ->orderBy('likeable_average', 'DESC')
		    ->get();

		return view('petisi.populer')->with('datas', $datas);
	}

	public function about()
	{
		return view('about.index');
		/**
		*/
	}
}