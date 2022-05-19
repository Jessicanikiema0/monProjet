<?php
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\ConnController;

use Illuminate\Http\Controllers;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnMedecController extends Controller
{
     //create form medecin
     public function getValidateMedec()
     {
         return view('medecin/loginValideMe');
     }

     //store form data in database medecin
     public function postValidateMedec(Request $request)
     {
        $request->validate([
         'username' => 'required',
         'passwd' => 'required|min:8|max:255',
        ]);
    }

     //page d'acceuil medecin
     public function afficheMedec()
     {
         return view('medecin/medecAcc');
     }
}
