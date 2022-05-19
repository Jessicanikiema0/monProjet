<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretaire extends Model
{
    use HasFactory;
    public $primaryKey = 'id_secretaire';
    public $incrementing = false;
    protected $fillable = [ 
        'id_secretaire', 'nom', 'prenom', 'telportable', 'telmobile', 'email', 'rue', 'ville', 'pays', 'sexe', 'username'
    ];
}
