<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class katalog extends Model
{

    protected $table='katalogs';

    protected $fillable = ['lpp_lv', 'lpp_en', 'lpp_ru'];

    protected $baseDir = 'images/katalogs';

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

    /*Foto*/
    public function deleteBilde($langa)
    {
        echo $langa;
        if ($langa == 'lv'){
            \File::delete([$this->lpp_lv]);
        } elseif ($langa == 'en'){
            \File::delete([$this->lpp_en]);
        } elseif ($langa == 'ru'){
            \File::delete([$this->lpp_ru]);
        }
        return;
    }

    public function delLinks($langa)
    {
        if ($langa == 'lv'){
            $this->update(['lpp_lv'=>$this->nullIfEmpty('')]);
        } elseif ($langa == 'en'){
            $this->update(['lpp_en'=>$this->nullIfEmpty('')]);
        } elseif ($langa == 'ru'){
            $this->update(['lpp_ru'=>$this->nullIfEmpty('')]);
        }
        return;
    }

    protected function nullIfEmpty($input)
    {
        return trim($input) == '' ? null : trim($input);
    }

    /*Faila nosaukums*/
    public static function named($name)
    {
        $katalog= new static;

        return $katalog->saveAs($name->getClientOriginalName());

    }

    protected function saveAs($name)
    {
        $this->name  = sprintf('%s-%s', time(), $name);
        $this->path = sprintf('%s/%s', $this->baseDir, $this->name);
        return $this;
    }

    public function move(UploadedFile $file, $plat, $gar)
    {
        $file->move($this->baseDir, $this->name);
        $this->makeFoto($plat, $gar);
        return $this;
    }

    protected function makeFoto($plat, $gar){
        Image::make($this->path)
            ->resize($plat, $gar, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->save($this->path);
        return $this;
    }

    public function pievienoBildi($foto, $langa)
    {
        if ($langa == 'bildeLV'){
            $this->update(['lpp_lv'=>$foto->path]);
        } elseif ($langa == 'bildeEN'){
            $this->update(['lpp_en'=>$foto->path]);
        } elseif ($langa == 'bildeRU'){
            $this->update(['lpp_ru'=>$foto->path]);
        }

        return;
    }
}
