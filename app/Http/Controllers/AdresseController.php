<?php

namespace App\Http\Controllers;

use App\adresse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdresseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uid = Auth::user()->id;
		$adressen = adresse::all()->where('user_id',$uid);
		return view('adressen.index', compact('adressen'));
		//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adressen.create');
		//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
			'typ' => 'required',
			'Anrede' => 'required',
			'Name' => 'required',
			'Vorname' => 'required',
			'Strasse' => 'required',
			'Hausnummer' => 'required',
			'Postleitzahl' => 'required',
			'Ortsname' => 'required',
			'Land' => 'required'
		]);
		
		$data['user_id'] = Auth::user()->id;
		adresse::create($data);
		
		return redirect('/startseite')->with('status', 'Adresse erfasst!');
		//
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function show(adresse $adresse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function edit(adresse $adresse)
    {
        $adressen = adresse::all()->where('id',$adresse->id)->first();
		return view('adressen.edit', compact('adressen'));
		
		return redirect('/startseite')->with('status', 'Adresse geändert!');//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adresse $adresse)
    {
		$id = $adresse->id;
		$uid = $adresse->user_id;
		$neueAdresse = $request->all();
		$neueAdresse['id'] = $id;
		$neueAdresse['user_id'] = $uid;
		$alteAdresse = adresse::findorfail($id);
		$updateadresse = $alteAdresse->update($neueAdresse);
		/* adresse::where('id', $adresse->id) -> update(array($request)); */
		return redirect('/startseite')->with('status', 'Adresse geändert!');
		//
    }

     public function delete(adresse $adresse)
    {
        /* Löschen einer Adresse */
		return view('adressen.delete', compact('adresse'));
		/*

		return redirect('/startseite')->with('status', 'Adresse gelöscht!');
				*/
		//
    }
	 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adresse  $adresse
     * @return \Illuminate\Http\Response
     */
    public function destroy(adresse $adresse)
    {
        /* Löschen einer Adresse */
		$id = $adresse->id;
		$alteAdresse = adresse::find($id);
		$alteAdresse->delete();
		/*
		adresse::where('id',$adresse->id)->delete();

		$adresse->delete();
		*/
		return redirect('/startseite')->with('status', 'Adresse gelöscht!');
		//
    }
}
