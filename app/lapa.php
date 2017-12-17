<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class lapa extends Model
{
    /*Tulkojumi*/
    private $current_locale;

    public function __construct()
    {
        parent::__construct();
        $this->current_locale = App::getLocale();

    }


    public function getTranslationsAttribute()
    {
        return json_decode($this->languages);
    }

    //Tulkojumi

    public function getNosaukumsAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"nosaukums_" . $this->current_locale};
        }
        return $this->{"nosaukums_" . $this->translations[0]};
    }


    /*Attiecības*/
    public function rinda()
    {
        return $this->hasMany('App\rinda')->orderBy('vietaLimeni', 'asc');
    }
}
