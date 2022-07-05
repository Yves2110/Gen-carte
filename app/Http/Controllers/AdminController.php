<?php

namespace App\Http\Controllers;

use auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\RegisterSecretary;




class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_index');
    }

    /**
     * Display a listing of the resource secretary.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $users = User::all();
        return view('admin.liste_secretaire', compact('users'));
    }

    /**
     * Show the gestionnary for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gestion()
    {
        return view('admin.gestion_secretaire');
    }

     /**
     * Show the student space for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function espace()
    {
        return view('admin.espace_etudiant');
    }
     /**
     * Show the student adding for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ajout()
    {
       //
    }
     /**
     * Show the secretary manage for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function secretaire()
    {
        return view('admin.secretaire_index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inscription_secretaire');
    }
 /**
     * Show the list for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listeSecretaire()
    {
        return view('admin.liste_secretaire');
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

      $user=  User::create([
            "firstname" =>$request->nom,
            "lastname" =>$request->prenom,
            "role_id" =>$request->role_id,
            "email" =>$request->email,
            "password" =>Hash::make($request->password),

        ]);
        $user->notify(new RegisterSecretary());

        return back()->with('message', 'Enregistrement effectué avec succès!');
    }

      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function enregistre(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users'
        ]);

      $user=  User::create([
            "firstname" =>$request->nom,
            "lastname" =>$request->prenom,
            "role_id" =>$request->role_id,
            "email" =>$request->email,
            "password" =>Hash::make($request->password),

        ]);
        return back()->with('message', 'Enregistrement effectué avec succès!');
        $user->notify(new RegisterSecretary());
        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( User $user)
    {
        return view('admin.inscription_secretaire', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $id)
    {
        $user= User::find($id);

      $user=  User::create([
            "firstname" =>$request->nom,
            "lastname" =>$request->prenom,
            "role_id" =>$request->role_id,
            "email" =>$request->email,
            "password" =>Hash::make($request->password),

        ]);
        $user->notify(new RegisterSecretary());

        return back()->with('message', 'Modification effectué avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
        return redirect("{{route('admin.index')}}")->with('message','Suppression effectué avec succès');
    }
}
