<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\ConnController;
use  App\Http\Controllers\ConnMedecController;
use Illuminate\Http\Controllers;
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class admConnecController extends Controller
{
     //create form admin
     public function getValidateAdmin()
     {
         return view('admin/adminiCon');
     }

     //store form data in database administrateur
     public function postValidateAdmin(Request $request)
     {
        $request->validate([

         'id_administrateur' => 'required|min:8|max:255',
         'username' => 'required',
        ]);
    }
    //page d'acceuil administrateur
    public function affiche()
    {
        return view('admin/admAcc');
    }
}
