<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;




class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */




    public function formulaire(){

        if (Auth::check()) {
        return redirect()->route('dashboard');
        }

    	return view('welcome');
    }





    public function traitement(Request $request)
    {
        $credentials = $request->only('email', 'password',);
        $remember = $request->only('remember');

        if (Auth::attempt($credentials, $remember)) {

            $request->session()->regenerate();


        return redirect()->intended('/admin');
         
        }

        return back()->withErrors([
            'email' => 'The providedtest credentials do not match our records.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}




// class LoginController extends Controller
// {
//     public function formulaire(){
//     	return view('welcome');
//     }


//     public function traitement(){
//     	request()->validate([
//     		'email' => ['required', 'email'],
//     		'password' => ['required'],
//     	]);



//     	if (Auth::attempt(['email' => 'email', 'password' => 'password'])) {
//    	return "YES";
// 	} else
//     	return "heuuuuu";
//     }




// }


