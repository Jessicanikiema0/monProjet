@extends('secretaires.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>MEDICAL CENTER</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-outline-success" href="{{ route('secretaires.create') }}"> Créer une nouvelle secretaire</a>
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
            <th>Téléphone portable</th>
            <th>Téléphone mobile</th>
            <th>Adresse mail</th>
            <th>Rue</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Sexe</th>
            
        </tr>
        @foreach ($secretaires as $secretaire)
        <tr>
           
            <td>{{ $secretaire->id_secretaire }}</td>
            <td>{{ $secretaire->nom }}</td>
            <td>{{ $secretaire->prenom }}</td>
            <td>{{ $secretaire->telportable }}</td>
            <td>{{ $secretaire->telmobile }}</td>
            <td>{{ $secretaire->email }}</td>
            <td>{{ $secretaire->rue }}</td>
            <td>{{ $secretaire->ville }}</td>
            <td>{{ $secretaire->pays }}</td>
            <td>{{ $secretaire->sexe }}</td>
            <td>{{ $secretaire->username}}</td>

            <td>
                <form action="{{ route('secretaires.destroy',$secretaire->id_secretaire) }}" method="POST">
   
                    <a class="btn btn-outline-primary" href="{{ route('secretaires.show',$secretaire->id_secretaire) }}">Montrer</a>
    
                    <a class="btn btn-outline-success" href="{{ route('secretaires.edit',$secretaire->id_secretaire) }}">Éditer</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-outline-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="d-flex justify-content-center pagination-lg">
    {!! $secretaires->links('pagination::bootstrap-4') !!}
      </div>
@endsection