<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EPointE1 extends Controller
{
    // Erweiterung für die Benutzerberechtigung (Registrieren und Anmelden)
	 public function __construct()
    {
        $this->middleware('checkroles:admin,editor,author');
		$this->middleware('auth');
    }
	// Aufruf der Startseite
	public function index()
    {
        return view('hinweisseite');
    }
	public function startseite(){
	//	$user = Auth::user();
	//	$user = authorizeRoles(['admin','editor']);
		return view('startseite');
	}
	//
	 // Aufruf der Hinweisseite
	public function hinweisseite(){
	//	$user = Auth::user();
	//	$user = authorizeRoles(['user','author']);
		return view('hinweisseite');
	}
	//
}
