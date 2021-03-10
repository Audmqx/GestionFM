<?php

namespace App\Http\Controllers;

use App\Models\FicheMetier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class DashboardController extends Controller
{
    public function AccesDashboard(Request $request){
        
    $listeFicheMetier = DB::table('fichemetier')->get();

    return view('dashboard.admin', ['FicheMetier' => $listeFicheMetier]);
	}




    public function GetFicheMetier(Request $request, $code_rom){
        
	$data = FicheMetier::where('code_ROM', $code_rom)->first();

	return view('dashboard.fichemetier', ['data' => $data]);
	}


}
