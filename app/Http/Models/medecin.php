<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class medecin extends Model
{

    public $primaryKey = 'id_medecin';
    public $incrementing = false;
    protected $fillable = [
        'id_medecin', 'nom', 'prenom', 'specialite', 'telportable', 'telmobile', 'email', 'rue', 'ville', 'pays', 'sexe', 'username'
    ];
}
