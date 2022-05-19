<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('layouts/head');
    }
public function inscrit()
{
    return view('secretaire/secretairecon');
}


public function retourH()
{
    return view('layouts/head');
}



}
