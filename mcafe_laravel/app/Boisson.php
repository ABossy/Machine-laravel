<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Recette;
use App\Vente;

class Boisson extends Model{
	protected $table = 'boissons';
	protected $primaryKey = 'id';


	public function recette()
	{
		return $this->hasmany('App\Recette');
	}

	public function vente()
	{
		return $this->hasOne('App\Vente');
	}

}