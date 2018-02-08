<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Boisson;
use App\Ingredient;

class Recette extends Model
{
    protected $table = 'recettes';
	protected $primaryKey = 'idRecette';


	public function ingredient()
	{
		return $this->belongsTo('App\Ingredient','idIngredient');
		
	}

	public function boisson()
	{
		return $this->belongsTo('App\Boisson','idBoisson');
	}

}
