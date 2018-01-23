<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class rinda extends Model
{

    protected $table='rindas';

    protected $fillable = ['fotoLinks', 'fotoThumb'];


    protected $baseDir = 'images/bildes';


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

    /*Foto*/
    public function delete()
    {
        \File::delete([
            $this->fotoLinks
        ]);
        return;
    }

    public function delLinks()
    {
        return $this->update([
            'fotoLinks'=>$this->nullIfEmpty('')
        ]);
        //dd($this);
    }

    protected function nullIfEmpty($input)
    {
        return trim($input) == '' ? null : trim($input);
    }



    /*Viens foto*/
    public static function named($name)
    {
        $rinda= new static;

        return $rinda->saveAs($name->getClientOriginalName());

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

    public function pievienoBildi($foto)
    {
        return $this->update(['fotoLinks'=>$foto->path]);
    }
}
