<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
     protected $fillable = [
     'nom',
     'email',
     'branche',
     'created_at',
     'image'
    ];
}
