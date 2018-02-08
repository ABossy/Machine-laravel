<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ingredient;//nom du model

class IngredientsController extends Controller
{

    /*public function show(){
	$ingredientStock = [
	"café" => ["stock" => 50],
    "The" => ["stock"=> 50],
    "Chocolat" => ["stock"=>50],
    "lait" => ["stock"=>50],
    "eau" => ["stock"=>50],
    "sucre" => ["stock"=>50],
];
	return view('Ingredients',compact('ingredientStock'));
	}
}*/
    public function index(){
        $ingredientStock = DB::select('select * from ingredients');

        return view('Ingredients',compact('ingredientStock'));
    }


    public function store(Request $request){
        $donnees = new Ingredient;
        $donnees->Nom = request('nomingredient');
        $donnees->Stock = request('prixingredient');
        $donnees->code = request('codeingredient');
        $donnees->save();

        return redirect('2');

    } // Nouvelle création ingredient.


    public function destroy($id){
        $ingredients = Ingredient::find($id);
        $ingredients->delete();
     
     return redirect('2');

    } // Supprimer un ingredient


    public function edit($id){
        $edit= Ingredient::find($id);
        $edit->nom = request('nomingredients');
        // name de l'input du formulaire
        $edit->stock = request('stockingredients');
        $edit->code = request('codeIngredients');
        $edit->save();

        return redirect('2');
     
    } // Modifier un ingredient.






}
