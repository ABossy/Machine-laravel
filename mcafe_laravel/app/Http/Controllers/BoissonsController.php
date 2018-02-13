<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Boisson;//nom du model
use App\Vente;




class BoissonsController extends Controller
{

    /*public  function show() {
	$boisson = [
	"cafelong" => ["prix" => 70],
    "the" => ["prix"=>60],
    "Chocolat" => ["prix"=>90],
    "Cappuccino" => ["prix"=>80],
];
	return view('boissons',compact('boisson'));
}*/ //retourne le nom et le prix de toutes les boissons du tableau 
	
	// public function index(){
	// 	$boissons = boissons::all();

	// 	return view('boissons',compact('boissons'));

	// } //permet d'afficher toutes les infos (de la bdd) des boissons et de les retourner dans la vue boissons. 


	public function store(Request $request){
		$donnees = new Boisson;
		$donnees->nom = request('nomboisson');
		$donnees->prix = request('prixboisson');
		$donnees->code = request('codeboisson');
		$donnees->save();//sauvegarde en base de donnees.

		return redirect('1');

	} // Nouvelle création boisson


	public function destroy($id){
		$boissons = Boisson::find($id);
		$boissons->delete();
	 
	 return redirect('1');

	} // Supprimer une boisson

	 public function edit($id){
	 	$edit = Boisson::find($id);
		$edit->nom = request('nomboisson');
	 	$edit->prix = request('prixboisson');
	 	$edit->code = request('codeboisson');
	 	$edit->save();

	 	return redirect('1');
	 
	} // Modifier une boisson


 	public function index(){
		$boissons = Boisson::select()
		->orderBy('Nom','ASC')->get();

		return view('boissons',compact('boissons'));

	} // trier par Nom 


	public function nomdown(){
		$boissons = Boisson::select()
		->orderBy('Nom','DESC')->get();

		return view('boissons',compact('boissons'));

	}

	// trier par Nom décroissant

	public function prixup(){
		$boissons = Boisson::select('Nom','id','Prix')
		->orderBy('Prix','ASC')->get();

		return view('boissons',compact('boissons'));

	} //trier par prix croissant 

	public function prixdown(){
		$boissons = Boisson::select('Nom','id','Prix')
		->orderBy('Prix','DESC')->get();

		return view('boissons',compact('boissons'));

	} //trier par prix croissant 

}