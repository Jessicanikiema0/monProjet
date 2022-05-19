<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>connxion Medecin</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>

<body style="background-color: #288B">
    <div class="container mt-5">

        <!-- Success message -->
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif
        <h1 style="text-align: center; color: white" >Administrateur connectez-vous ici!!!</h1></span></br>
        <form methode="post" action="/loginValidateSe" style="text-align: center; color: white" >

<span style="margin-left:340px; margin-top: 0px;" class="brand-text font-weight-light;">

               @csrf


                  <div class="form-group col-6 lg">
                  <span style="margin-left:340px; margin-top: 0px;" class="brand-text font-weight-light;">
                <input type="text" style="text-align: center; color: black" name="username"
                 placeholder="Entrer votre login" class="form-control" >
               </div>

               <div class="form-group col-6 lg">
               <input type="passwd" style="text-align: center; color: black" name="passwd"
               placeholder="Entrer votre mot de passe" class="form-control">
               <a href="accAdm"><input type="submit" style="background-color: blue; border: none; color: white; padding:10px; margin:10px; text-align: center; text-decoration:none;display: inline-block; font-size: 15px; cursor:pointer; " type="submit" name="valider" value="valider" ></a>
               </span>


               </div>





       </form>
       <ul class="error">
           @foreach($errors->all() as $error)
           <li>{{ $error }}</li>
           @endforeach
</ul>
</div>
</body>
