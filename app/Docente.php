<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //associate de user with Docente
    public function user(){
        return $this->hasOne('App\User');
    }
}
