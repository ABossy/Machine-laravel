<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Recette;

class Ingredient extends Model
{
    protected $table = 'ingredients';
	protected $primaryKey = 'id';

	public function recette()
	{
		return $this->hasmany('App\Recette');
	}




}


