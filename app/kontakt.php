<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class kontakt extends Model
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

    //Tulkojumi adrese_

    public function getNosaukumsAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"nosaukums_" . $this->current_locale};
        }
        return $this->{"nosaukums_" . $this->translations[0]};
    }

    public function getAdreseAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"adrese_" . $this->current_locale};
        }
        return $this->{"adrese_" . $this->translations[0]};
    }

    public function getAdrnosAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"adrnos_" . $this->current_locale};
        }
        return $this->{"adrnos_" . $this->translations[0]};
    }

    public function getBankaAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"banka_" . $this->current_locale};
        }
        return $this->{"banka_" . $this->translations[0]};
    }

    public function getBanknosAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"banknos_" . $this->current_locale};
        }
        return $this->{"banknos_" . $this->translations[0]};
    }

    public function getDlaiksAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"dlaiks_" . $this->current_locale};
        }
        return $this->{"dlaiks_" . $this->translations[0]};
    }

    public function getDlaiknosAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"dlaiknos_" . $this->current_locale};
        }
        return $this->{"dlaiknos_" . $this->translations[0]};
    }

    public function getSaitsAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"saits_" . $this->current_locale};
        }
        return $this->{"saits_" . $this->translations[0]};
    }

    public function getDesriptionAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"desription_" . $this->current_locale};
        }
        return $this->{"desription_" . $this->translations[0]};
    }

}
