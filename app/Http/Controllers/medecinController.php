<?php

namespace App\Http\Controllers;

use App\Models\medecin;
use Illuminate\Http\Request;

class medecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecins = medecin::latest()->paginate(4);

        return view('medecins.index',compact('medecins'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medecins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_medecin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'specialite' => 'required',
            'telportable' => 'required',
            'telmobile' => 'required',
            'email' => 'required',
            'rue' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'sexe' => 'required',
            'username' => 'required',
        ]);

        medecin::create($request->all());

        return redirect()->route('medecins.index')
                        ->with('success','Médecin créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(medecin $medecin)
    {
        return view('medecins.show',compact('medecin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function edit(medecin $medecin)
    {
        return view('medecins.edit',compact('medecin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medecin $medecin)
    {
        $request->validate([
            'id_medecin' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'specialite' => 'required',
            'telportable' => 'required',
            'telmobile' => 'required',
            'email' => 'required',
            'rue' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'sexe' => 'required',
            'username' => 'required',
        ]);

        $medecin->update($request->all());

        return redirect()->route('medecins.index')
                        ->with('success','Médecin mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(medecin $medecin)
    {
        $medecin->delete();

        return redirect()->route('medecins.index')
                        ->with('success','Médecin supprimé avec succès');
    }
}
