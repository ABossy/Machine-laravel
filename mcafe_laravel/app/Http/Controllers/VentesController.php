<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vente;
use App\Boisson;//je lie mon controller aux differents models que j'utilise.
use App\Recette;

class VentesController extends Controller
{

    public function show()
	{
	$afficheVentes=Vente::all();
		
		return view('vente',compact('afficheVentes'));
	}

	public function destroyVente($id){
        $ventes = Vente::where('idVente',$id)->delete();

        return redirect()->back(); 
    } // Supprimer la vente ligne par ligne.

	
	
	


}