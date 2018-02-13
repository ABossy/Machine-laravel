<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Boisson;
use App\Ingredient; //je lie mon controller aux differents models que j'utilise.
use App\Recette;
use App\Vente;




class RecettesController extends Controller
{

//     public function show(){
// // 	$recetteBoisson = [
// // 	"café long" => ["eau" =>2,"cafe"=>1],
// //     "The" => ["eau"=> 2, "the"=>1],
// //     "Chocolat" => ["eau"=>1, "chocolat"=>1, "lait"=>1],
// //     "Cappuccino" => ["eau"=>1, "cafe"=>1,"lait"=>1],
   
// // ];
// // 	return view('recette',compact('recetteBoisson'));
// }

// tableau associatif des recettes qui est retourné sur la vue recette.

public function index(){
	$afficheBoissons= Boisson::all();
	
	return view('recette',compact('afficheBoissons'));
	}

// permet d'afficher la liste des boissons sur ma page recette.

public function show($id){
	$details= Recette::whereIdboisson($id)->get();
	$afficheBoissons= Boisson::all();
	$afficheIngredients=Ingredient::all();
	return view('detailsRecettes',['details'=>$details, 'afficheBoissons'=>$afficheBoissons,'afficheIngredients'=>$afficheIngredients]);

	}
// permet d'afficher mes relations d'apres le model Recette en fonction de l'id

public function store(Request $request){
		$donnees = new Recette;
		$donnees->idBoisson = request('idBoisson');
		$donnees->idingredient = request('idIngredient');
		$donnees->nbdose = request('nbdose');
		$donnees->save();//sauvegarde en base de donnees.

		return redirect()->route('boissons.details',['id'=>$donnees->idBoisson]);

	} // Nouvelle création recette

    
 public function destroy($id){
        $ingredientR = Recette::where('idBoisson',$id)->delete();

        return redirect()->route('recette.store');
    } // Supprimer la recette entiere.

	
public function destroyIngredient($id){
        $recette = Recette::where('idRecette',$id)->delete();

        return redirect()->back();
    } // Supprimer la recette ligne par ligne.


}

