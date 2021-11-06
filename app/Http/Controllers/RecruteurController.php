<?php

namespace App\Http\Controllers;

use App\Models\Recruteur;
use Illuminate\Http\Request;

class RecruteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre="Emplois";
        $emplois= Recruteur::all();
        return view('job.job', compact('titre', 'emplois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titre="Poste d'emplois";
        return view('job.post_job', compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // VALIDATION
        $donnees= $this->validate($request, [
            'nom'=>'required|max:255',
            'email'=>'required|max:255',
            'pays'=>'required|max:255',
            'ville'=>'required|max:255',
            'profession'=>'required|max:255',
            'photo'=>'required',
            'salaire'=>'required|max:255',
            'categorie'=>'required|max:255',
            'description'=>'required|max:255',
        ]);

        // INSERTION DANS LA BASE DE DONNEE
        $recru = new Recruteur();
        $recru->nom = $request->nom;
        $recru->email = $request->email;
        $recru->pays = $request->pays;
        $recru->ville = $request->ville;
        $recru->profession = $request->profession;
        $recru->photo = $request->photo;
        $recru->salaire = $request->salaire;
        $recru->categorie = $request->categorie;
        $recru->description = $request->description;
        $recru->save();

        return redirect()->back()->with('message', 'Emplois créer avec succes !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function show(Recruteur $recruteur)
    {
        $titre="Detail";
        return view('job.job_detail', compact('titre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruteur $recruteur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruteur $recruteur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruteur  $recruteur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruteur $recruteur)
    {
        //
    }
}
