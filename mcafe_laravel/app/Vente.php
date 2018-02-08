<?php

namespace App;
use App\Boisson;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $table = 'ventes';
	protected $primaryKey = 'idVente';


	public function boisson()
	{
		return $this->hasmany('App\Boisson');
	}

}