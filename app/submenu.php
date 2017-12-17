<?php

namespace App;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;

class submenu extends Model
{
    //
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
}
