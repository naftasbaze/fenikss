<?php

namespace App;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class foto extends Model
{
    //

    protected $table='fotos';

    protected $fillable = ['galerija_id', 'path', 'thumbnail_path'];


    protected $baseDir = 'galerijas';

    public function delete()
    {
        \File::delete([
            $this->path,
            $this->thumbnail_path
        ]);

        parent::delete();
    }

    public static function named($name)
    {
        $foto= new static;

        $nos=$name->getClientOriginalName();
        $pap=$name->getClientOriginalExtension();
        $nos=str_slug(substr($nos, 0, strlen($nos)-strlen($pap)-1)). '.' . $pap;

        return $foto->saveAs($nos);

    }


    protected function saveAs($name)
    {
        $this->name  = sprintf('%s-%s', time(), $name);
        $this->path = sprintf('%s/%s', $this->baseDir, $this->name);
        $this->thumbnail_path = sprintf('%s/tn-%s', $this->baseDir, $this->name);

        return $this;
    }

    public function move(UploadedFile $file)
    {

        $file->move($this->baseDir, $this->name);
        //var_dump($file);
        $this->makeFoto();
        $this->makeThubnail();

        return $this;
    }

    protected function makeThubnail(){
        $bilde=Image::make($this->path);

        if($bilde->width() > $bilde->height()){
            $bilde->resize(null, 480, function ($constraint) {
                $constraint->aspectRatio();
            });
            $bilde->resizeCanvas(700, null)
                ->save($this->thumbnail_path);
        }
        else{
            $bilde->resize(700, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $bilde->resizeCanvas(700, 480)
                ->save($this->thumbnail_path);
        }




        return $this;
    }

    protected function makeFoto(){
        $teksts='Fenikss KO '.Carbon::now()->year;
        $bilde=Image::make($this->path);

        if($bilde->width() > $bilde->height()) {
            $bilde->resize(1920, 1080, function ($constraint) {
                $constraint->aspectRatio();
            });
        } else{
            $bilde->resize( 1080, 1920, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        $bilde ->text($teksts, 20 , 20, function($font) {
            $font->color('#EF7F1A');
            $font->file('fonts/DroidSans.ttf');
            $font->size(12);
        })
            ->save($this->path);
        return $this;
    }

}
