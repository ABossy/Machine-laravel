<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Ingredient;

class detailsIngredientsController extends Controller
{
	public function index($id){
		/*$ingredients = DB::select('select * from ingredients where idIngredients = ?', [$id]);*/
	$ingredients= Ingredient::find($id);

		
		return view('detailsIngredients', compact('ingredients'));
	}

	

}

