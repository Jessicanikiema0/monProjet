@extends('medecins.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>MEDICAL CENTER</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('medecins.create') }}"> Créer un nouveau médecin</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Spécialité</th>
            <th>Téléphone portable</th>
            <th>Téléphone mobile</th>
            <th>Adresse mail</th>
            <th>Rue</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Sexe</th>
            
        </tr>
        @foreach ($medecins as $medecin)
        <tr>
           
            <td>{{ $medecin->id_medecin }}</td>
            <td>{{ $medecin->nom }}</td>
            <td>{{ $medecin->prenom }}</td>
            <td>{{ $medecin->specialite }}</td>
            <td>{{ $medecin->telportable }}</td>
            <td>{{ $medecin->telmobile }}</td>
            <td>{{ $medecin->email }}</td>
            <td>{{ $medecin->rue }}</td>
            <td>{{ $medecin->ville }}</td>
            <td>{{ $medecin->pays }}</td>
            <td>{{ $medecin->sexe }}</td>
            <td>{{ $medecin->username}}</td>

            <td>
                <form action="{{ route('medecins.destroy',$medecin->id_medecin) }}" method="POST">
   
                    <a class="btn btn-outline-primary" href="{{ route('medecins.show',$medecin->id_medecin) }}">Montrer</a>
    
                    <a class="btn btn-outline-success" href="{{ route('medecins.edit',$medecin->id_medecin) }}">Éditer</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    {!! $medecins->links('pagination::bootstrap-4') !!}
      </div>
@endsection