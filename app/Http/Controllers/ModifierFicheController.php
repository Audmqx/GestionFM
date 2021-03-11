<?php

namespace App\Http\Controllers;

use App\Models\FicheMetier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class ModifierFicheController extends Controller
{
 


	public function ShowFicheMetier(Request $request){

	$data = FicheMetier::where('code_ROM', $request->fiche)->first();

	return view('dashboard.modifierFiche',['data' => $data]);
	}




	public function TraitementFicheMetier(Request $request){



		// find = par id
	    // $fiche = FicheMetier::find($request->code_ROM);





		if (!empty($request->image)) {
			$path = $request->file('image')->storePubliclyAs(
		    "public",
		    "$request->code_ROM.jpg",
		    );
		
		}

		// Storage::delete("public/$request->code_ROM.jpg");


	
		FicheMetier::where('code_ROM', $request->code_ROM)

         ->update([
         	'titre' => $request->titre,
         	'description_courte' => $request->description_courte,
         	'description_longue' => $request->description_longue,
         ]);

           return redirect('/admin');

  	
    }


       
}	





