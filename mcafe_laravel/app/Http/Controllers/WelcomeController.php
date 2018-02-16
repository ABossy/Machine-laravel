<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vente;
use App\Boisson;
use App\Recette;
use App\Ingredient;
use App\User;

class WelcomeController extends Controller {

    public function index()
    {

	return view('home');
	}

	 public function indexVente(){
        $commandes = Boisson::all();
        $afficheUsers = User::all();
        return view('bienvenue',['commandes'=>$commandes, 'afficheUsers'=>$afficheUsers]);
    }
    // permet de récuperer les données pour les champs du formulaire.

    public function store(Request $request){
    	$boisson = Boisson::find($request->idBoisson);
    	// dd($request);

    	$user = User::find($request->idUser);
    	$nbSucre = $request->nbSucre;

    	$donnees = new Vente;
    	$donnees->nomUser = $user->name;
    	$donnees->nomBoisson = $boisson->Nom;
    	$donnees->boissons_id = $boisson->id;
    	$donnees->Prix = $boisson->Prix;
    	$donnees->nbSucre = $nbSucre;
		$donnees->save();//sauvegarde en base de donnees.


		return redirect()->route('vente.details',compact('donnees'));

	} // Nouvelle création vente

	
}	

