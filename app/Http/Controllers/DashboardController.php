<?php

namespace App\Http\Controllers;

use App\Models\FicheMetier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function AccesDashboard(Request $request){
        
    $listeFicheMetier = DB::table('fichemetier')->get()->where('vues','1');

    return view('dashboard.admin', ['FicheMetier' => $listeFicheMetier]);
	}




    public function GetFicheMetier(Request $request){
        
	$data = FicheMetier::where('code_ROM', $request->code_rom)->first();

	return view('dashboard.fichemetier', ['data' => $data]);
	}



	public function ModifyFicheMetier(Request $request){

	$data = FicheMetier::where('code_ROM', $request->fiche)->first();

	return view('dashboard.modifierFiche',['data' => $data]);
	}




	public function TraitementFicheMetier(Request $request){

		// $path = $request->file('image')->storeAs(
		// 'imagesICI', "$request->code_ROM.jpg"
		// );

		$path = $request->file('image')->storePubliclyAs(
	    "public",
	    "$request->code_ROM.jpg",
	    );

	    // Storage::copy("storage/app/public/$request->code_ROM.jpg", "public/images/$request->code_ROM.jpg");

	 	$fiche = new FicheMetier;

        $fiche->code_ROM = $request->code_ROM;
        $fiche->titre = $request->titre;
        $fiche->description_longue = $request->description_longue;
        $fiche->description_courte = $request->description_courte;
        $fiche->vues = "1";

       

        $fiche->save();

         return redirect('/admin');
}	



	public function CreateFicheMetier(){
       
		
	return view('dashboard.creerFiche');
	}


}




//FILE STORAGE EXEMPLE
// $path = $request->file('image')->store('avatars');

//      return $path;