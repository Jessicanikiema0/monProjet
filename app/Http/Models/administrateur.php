<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class administrateur extends Model
{
    protected $fillable = [
        'id_administration', 'username',
    ];
}
