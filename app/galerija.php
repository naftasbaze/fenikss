<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class galerija extends Model
{
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


    public function getApaksnosAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"apaksnos_" . $this->current_locale};
        }
        return $this->{"apaksnos_" . $this->translations[0]};
    }

    public function getAprakstsAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"apraksts_" . $this->current_locale};
        }
        return $this->{"apraksts_" . $this->translations[0]};
    }


    //Attiecības
    public function foto()
    {
        return $this->hasMany('App\foto')->orderBy('id', 'asc');
    }

    public function katalogs()
    {
        return $this->hasMany('App\katalog')->orderBy('id', 'asc');
    }


}
