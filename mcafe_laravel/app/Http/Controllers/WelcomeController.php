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


   public function indexJs()
   {
        //retourne la vue Javascript
       return view('mcjs');
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


    // Nouvelle création vente

           $recettes = Recette::where('idBoisson', request('idBoisson'))->get();
           // on stock dans recettes la recherche de la request idboisson
           foreach ($recettes as $recette) {
               $nbdose = $recette->nbdose;
               $ingredients = Ingredient::where('id', 
                $recette->idIngredient)->get();
               foreach ($ingredients as $ingredient) {
                   $ingredient->Stock = $ingredient->Stock - $nbdose;
                   $ingredient->save();
               }

                     //pour chaque recette on souhaite stocker la recherche du champ nombre de dose ainsi que l'ingredient associé a la recette.

                    //pour chaque ingredients on va recuperer les stock existant et le soustraire à la nbdose.
           }

           $nbSucre = Ingredient::where('Nom','sucre' )->get()->first();
           $nbSucre->Stock = $nbSucre->Stock - request('nbSucre');
           $nbSucre->save();

                    //on va chercher la donnée sucre de la table ingredient.
                    // on soustrait le stock sucre à la request du sucre.
           return redirect()->route('vente.details',compact('donnees'));

       }



    // Page Connexion Guest

       public function indexGuest(){
        $guestorder = Boisson::all();
        return view('guest',compact('guestorder'));
    }

        // permet de récuperer les données pour les champs du formulaire.

    public function storeGuest(Request $request){
        $guestdrink = Boisson::find($request->idBoisson);
            // dd($request);
        $nbSucre = $request->nbSucre;

        $donnees = new Vente;
        $donnees->nomBoisson = $guestdrink->Nom;
        $donnees->boissons_id = $guestdrink->id;
        $donnees->Prix = $guestdrink->Prix;
        $donnees->nbSucre = $nbSucre;
        $donnees->save();//sauvegarde en base de donnees.   
        $guestorder = Boisson::all();

        // Nouvelle création vente

        $recettes = Recette::where('idBoisson', request('idBoisson'))->get();
           // on stock dans recettes la recherche de la request idboisson
        foreach ($recettes as $recette) {
           $nbdose = $recette->nbdose;
           $ingredients = Ingredient::where('id', 
            $recette->idIngredient)->get();
           foreach ($ingredients as $ingredient) {
               $ingredient->Stock = $ingredient->Stock - $nbdose;
               $ingredient->save();
           }

                     //pour chaque recette on souhaite stocker la recherche du champ nombre de dose ainsi que l'ingredient associé a la recette.

                    //pour chaque ingredients on va recuperer les stock existant et le soustraire à la nbdose.
       }

       $nbSucre = Ingredient::where('Nom','sucre' )->get()->first();
       $nbSucre->Stock = $nbSucre->Stock - request('nbSucre');
       $nbSucre->save();

    // permet de récuperer les données pour les champs du formulaire.
    //on va chercher la donnée sucre de la table ingredient.
    // on soustrait le stock sucre à la request du sucre.

       return view('guest',compact('guestorder'));

   } 


}	

