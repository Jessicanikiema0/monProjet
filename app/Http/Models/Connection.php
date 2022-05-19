<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'passwd',
    ];

}
