<?php

namespace App\Http\Controllers;

use App\Models\FicheMetier;
use App\Models\Competencesfichemetier;
use App\Models\Competences;
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

	// $competences = DB::table('competences')
 //            ->join('competencesfichemetier', 'idCompetence', '=', "$request->code_rom")
 //            // ->join('orders', 'users.id', '=', 'orders.user_id')
 //            // ->select('users.*', 'contacts.phone', 'orders.price')
 //            ->get();

    $competences = DB::table('competences')
     ->join('competencesfichemetier', 'competences.idCompetence', '=', 'competencesfichemetier.idCompetence')
     ->select('competences.nomCompetence')
     ->where('competencesfichemetier.code_ROM', $request->code_rom)
     ->get();

	return view('dashboard.fichemetier', ['data' => $data, 'competences' => $competences]);
	}


//  Flight::select('competences')
//         ->whereColumn('destination_id', 'destinations.id')
//         ->orderByDesc('arrived_at')
//         ->limit(1)
// )->get();

// $users = DB::table('users')
//             ->join('contacts', 'users.id', '=', 'contacts.user_id')
//             ->join('orders', 'users.id', '=', 'orders.user_id')
//             ->select('users.*', 'contacts.phone', 'orders.price')
//             ->get();


// 	CompetenceficheMetier::Select('competences')








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