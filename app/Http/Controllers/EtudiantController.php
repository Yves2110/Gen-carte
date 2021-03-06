<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Notifications\CarteNotification;
use Illuminate\Http\Request;
use App\Notifications\RegisterSecretary;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants= etudiant::all();
        return view('admin.gestion_etudiant', compact('etudiants'));
    }

 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexe()
    {
        $etudiants= etudiant::all();
        return view('admin.liste_etudiant_secretaire', compact('etudiants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ajout-etudiant');
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function espace()
    {
        return view('admin.espace_etudiant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

      $etudiant=  etudiant::create([
            "nom" =>$request->nom,
            "prenom" =>$request->prenom,
            "email" =>$request->email,
            "date_naissance" =>$request->date_naissance,
            "numero_etudiant" =>$request->numero_etudiant,
            "matricule" =>$request->matricule,
            "cycle" =>$request->cycle,
            "annee_academique" =>$request->annee_academique,
            "nom_prenom_tuteur" =>$request->nom_prenom_tuteur,
            "numero_tuteur" =>$request->numero_tuteur,
            "file" =>$request->file,

        ]);
        // $etudiant->notify(new CarteNotification());
        // return $etudiant;
        return back()->with ('message', 'Enregistrement effectu?? avec succ??s!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(etudiant $etudiant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit(etudiant $etudiant)
    {
        return view('admin.ajout-etudiant', compact('etudiant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, etudiant $etudiant)
    {
        // $etudiants= etudiant::find($etudiant);

           $etudiant->update([
            "nom" =>$request->nom,
            "prenom" =>$request->prenom,
            "email" =>$request->email,
            "date_naissance" =>$request->date_naissance,
            "numero_etudiant" =>$request->numero_etudiant,
            "matricule" =>$request->matricule,
            "cycle" =>$request->cycle,
            "annee_academique" =>$request->annee_academique,
            "nom_prenom_tuteur" =>$request->nom_prenom_tuteur,
            "numero_tuteur" =>$request->numero_tuteur,
            "file" =>$request->file,
        ]);
        return redirect(route("etudiants.index"))->with ('message', 'Modification effectu?? avec succ??s!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(etudiant $etudiant)
    {
        $etudiants= etudiant::find($etudiant);
        $etudiant->delete();
        return redirect("{{route('etudiants.index')}}")->with('message','Suppression effectu?? avec succ??s');
    }
}
