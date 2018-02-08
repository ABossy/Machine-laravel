<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vente;
use App\Boisson;//je lie mon controller aux differents models que j'utilise.

class VentesController extends Controller
{

    public function show()
	{
	$afficheVentes=Vente::all();
		
		return view('vente',compact('afficheVentes'));
	}


	
	

}