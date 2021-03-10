<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class FicheMetier extends Model
{

	protected  $fillable =[
		'code_ROM',
		'titre',
		'description_longue',
		'description_courte',
		'vues',

	];

 	protected $table = 'fichemetier';
 	public $timestamps = false;


}




