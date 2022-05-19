<?php

namespace App\Http\Controllers;
use  App\Http\Controllers\PostController;
use  App\Http\Controllers\ConnMedecController;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Controllers;


class ConnController extends Controller
{
    //create form secretaire
    public function getValidate()
    {
        return view('secretaire/loginValidateSe');
    }

    //store form data in database secretaire
    public function postValidate(Request $request)
    {
       $request->validate([
        'username' => 'required',
        'id_secretaire' => 'required|min:8|max:255',
       ]);
    }

       //page d'acceuil secretaire
    public function afficheSecre()
    {
        return view('secretaire/secreAcc');
    }
    }







