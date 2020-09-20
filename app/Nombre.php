<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombre extends Model{

    public static function saisirNombre($n) {
            if (is_int($n)) return true;
            else return false;
        }
    }
    