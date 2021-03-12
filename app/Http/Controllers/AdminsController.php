<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Competence;
use App\Models\FicheMetier;
use App\Models\Competencesfichemetier;
use App\Models\Competences;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;


class AdminsController extends Controller
{


    public function AccesDashboard(Request $request){
        
    $listeAdmins = DB::table('users')->get()->where('role_id','admin');

    return view('superadmin.CrudSurAdmins', ['admins' => $listeAdmins]);
	}



	public function ShowAddAdmin(Request $request){

         return view('superadmin.AddAdmin');
	}	



	public function AddAdmin(Request $request){

        if ($request->password == $request->password_retype ) {
   
	        $user = new User;

	        $user->name = $request->name;
	        $user->email = $request->email;
	        $user->password = bcrypt($request->password);
	        $user->role_id = $request->role;

	        $user->save();   

	        return redirect('/liste-admins');
        } else {
        	return back();
        }

}


	public function DeleteAdmin (Request $request){


	User::where('email', $request->deleteAdmin)->delete();
	return redirect('/liste-admins');

}	



    public function ShowUpdateAdmin(Request $request){
        
    $Admin = DB::table('users')->get()->where('email',$request->updateAdmin)->first();

    return view('superadmin.UpdateAdmin', ['Admin' => $Admin]);
	}




	public function UpdateAdmin(Request $request){

		
		if ($request->password == $request->password_retype) {

			User::where('email', $request->email)
        ->update([
         	'name' => $request->name,
         	'email' => $request->mail,
         	'password' => bcrypt($request->password),
         	'role_id' => $request->role,
         ]);

           return redirect('/liste-admins');

		} else {

			return back();

		}



  	
    }




}


