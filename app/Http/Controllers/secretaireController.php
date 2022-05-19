<?php

namespace App\Http\Controllers;
use App\Models\secretaire;
use Illuminate\Http\Request;
use Secretaire as GlobalSecretaire;

class secretaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secretaires = secretaire::latest()->paginate(4);

        return view('secretaires.index',compact('secretaires'))
            ->with('i', (request()->input('page', 1) - 1) * 4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('secretaires.create');
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
            'id_secretaire' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'telportable' => 'required',
            'telmobile' => 'required',
            'email' => 'required',
            'rue' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'sexe' => 'required',
            'username' => 'required',
        ]);

        secretaire::create($request->all());

        return redirect()->route('secretaires.index')
                        ->with('success','Secretaire créé avec succès.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\secretaire  $secretaire
     * @return \Illuminate\Http\Response
     */
    public function show(secretaire $secretaire)
    {
        return view('secretaires.show',compact('secretaire'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\secretaire  $secretaire
     * @return \Illuminate\Http\Response
     */
    public function edit(secretaire $secretaire)
    {
        return view('secretaires.edit',compact('secretaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\secretaire  $secretaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, secretaire $secretaire)
    {
        $request->validate([
            'id_secretaire' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'telportable' => 'required',
            'telmobile' => 'required',
            'email' => 'required',
            'rue' => 'required',
            'ville' => 'required',
            'pays' => 'required',
            'sexe' => 'required',
            'username' => 'required',
        ]);

        $secretaire->update($request->all());

        return redirect()->route('secretaires.index')
                        ->with('success','Secretaire mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\secretaire  $secretaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(secretaire $secretaire)
    {
        $secretaire->delete();

        return redirect()->route('secretaires.index')
                        ->with('success','Secretaire supprimé avec succès');
    }
}
