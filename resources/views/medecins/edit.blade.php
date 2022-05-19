@extends('medecins.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Modifier le medecin</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-primary" href="{{ route('medecins.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oups! </strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('medecins.update',$medecin->id_medecin) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Identifiant:</strong>
                <input type="text" name="id_medecin" value="{{ $medecin->id_medecin }}"class="form-control" placeholder="Saisir un identifiant">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom:</strong>
                <input type="text" name="nom" value="{{ $medecin->nom }}"class="form-control" placeholder="Saisir un nom">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Prénom:</strong>
                <input type="text" name="prenom" value="{{ $medecin->prenom }}"class="form-control" placeholder="Saisir un prénom">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Spécialité:</strong>
                <input type="text" name="specialite" value="{{ $medecin->specialite }}"class="form-control" placeholder="Saisir la spécialité du médecin">
            </div>
        </div>
    </div>  

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Téléphone portable:</strong>
                <input type="text" name="telportable" value="{{ $medecin->telportable }}"class="form-control" placeholder="Saisir un numéro de téléphone portable">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
           <div class="form-group">
                <strong>Téléphone mobile:</strong>
                <input type="text" name="telmobile" value="{{ $medecin->telmobile }}"class="form-control" placeholder="Saisir un numéro de téléphone mobile">
           </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Adresse mail:</strong>
                <input type="text" name="email" value="{{ $medecin->email }}"class="form-control" placeholder="Saisir une adresse mail">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Rue:</strong>
                <input type="text" name="rue" value="{{ $medecin->rue }}"class="form-control" placeholder="Saisir une rue">

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Ville:</strong>
                <input type="text" name="ville" value="{{ $medecin->ville }}"class="form-control" placeholder="Saisir une ville">
            </div>
        </div>  
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Pays:</strong>
                <input type="text" name="pays" value="{{ $medecin->pays }}"class="form-control" placeholder="Saisir un pays">
            </div>
        </div>
    
    </div>
    
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Sexe:</strong>
                <input type="text" name="sexe" value="{{ $medecin->sexe }}"class="form-control" placeholder="Saisir un sexe">
            </div>
        </div>  
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Nom d'utilisateur:</strong>
                <input type="text" name="username" value="{{ $medecin->username }}"class="form-control" placeholder="Saisir un nom d'utilisateur">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Soumettre</button>
        </div>
    </div>
   
    </form>
@endsection