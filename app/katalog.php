<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class katalog extends Model
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

    public function getLppAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"lpp_" . $this->current_locale};
        }
        return $this->{"lpp_" . $this->translations[0]};
    }

    public function getBtnlabelAttribute()
    {
        if(in_array($this->current_locale, $this->translations))
        {
            return $this->{"btnlabel_" . $this->current_locale};
        }
        return $this->{"btnlabel_" . $this->translations[0]};
    }

    //Attiecibas
    public function galerja()
    {
        return $this->belongsTo('App\galerija', 'galerija_id')->orderBy('id', 'asc');
    }
}
