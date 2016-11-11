<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    //associate the user with Docente
    public function user(){
        return $this->hasOne('App\User');
    }
}
