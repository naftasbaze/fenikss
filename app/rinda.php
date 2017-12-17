<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class rinda extends Model
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

    public function getRakstsAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"raksts_" . $this->current_locale};
        }
        return $this->{"raksts_" . $this->translations[0]};
    }


    /*Attiecibas*/
    public function galerija()
    {
        return $this->hasMany('App\galerija')->orderBy('id', 'asc');
    }
}
