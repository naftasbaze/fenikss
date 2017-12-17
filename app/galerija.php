<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galerija extends Model
{
    //Attiecības
    public function foto()
    {
        return $this->hasMany('App\foto')->orderBy('id', 'asc');
    }
}
