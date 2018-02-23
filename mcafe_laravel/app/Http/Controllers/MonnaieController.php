<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Coin;


class MonnaieController extends Controller
{

	public function index(){
		$monnayeur= Coin::all();
		return view('Monnaie',compact('monnayeur'));
	}

	 public function edit($id){
        $coins= Coin::find($id);
        $coins->Stock = request('stock');
        // name de l'input du formulaire
        $coins->save();

        return redirect()->back();
     
    } // Modifier le stock de pieces.

  
}




