<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
     protected $fillable = [
     'nom',
     'email',
     'genre',
     'branche',
     'created_at',
     'image'
    ];
}
