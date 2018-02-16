<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Boisson;

class detailsBoissonsController extends Controller
{
	public function index($id){
		/*$boissons = DB::select('select * from boissons where idBoissons = ?', [$id]);*/
		$boissons= Boisson::find($id);

		return view('detailsBoissons',compact('boissons'));
	}

	//permet de lister les boissons en fonction de l'id sur la page details.

}

