<?php

namespace App;
use App\Boisson;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    protected $table = 'ventes';
	protected $primaryKey = 'idVente';


	public function boisson()
	{
		return $this->belongsTo('App\Boisson');
	}

}