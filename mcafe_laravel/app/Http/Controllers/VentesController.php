<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vente;
use App\User;
use App\Boisson;//je lie mon controller aux differents models que j'utilise.
use App\Recette;
use Auth;



class VentesController extends Controller
{

    public function show()
	{
		if ( Auth::user() && Auth::user()->role == 'admin'){
		$afficheVentes=Vente::all();
		
		return view('vente',compact('afficheVentes'));
		}else {
		$afficheVentes=vente::where('nomUser', Auth::user()->name)->get();
		
		// dd($afficheVentes);
		return view('vente',compact('afficheVentes'));
		}

	}

	public function destroyVente($id){
        $ventes = Vente::where('idVente',$id)->delete();

        return redirect()->back(); 
    } // Supprimer la vente ligne par ligne.

	
	
	public function searchNom(Request $request){
			$afficheVentes=Vente::where('nomUser',request('recherche'))->orWhere('nomBoisson',request('recherche'))->get();
			
			return view('vente',compact('afficheVentes'));
		
			//permet de rechercher 2 champs d'une table et de les afficher en fonction de la requete saisie dans le formulaire. (orWhere = ou)
		}

}

	

