<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voyages extends Model
{
    protected $fillable = [
        'titre',
        'destination',
        'prix'
    ];
}
