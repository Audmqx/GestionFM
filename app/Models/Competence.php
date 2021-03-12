<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{

	protected  $fillable =[
		'nomCompetence',

	];

 	protected $table = 'competences';
 	public $timestamps = false;


}




