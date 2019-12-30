<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Presences extends Model
{
    protected $fillable =['Nom','Prenom','Bureau','Date','Debut','Fin'];
}
