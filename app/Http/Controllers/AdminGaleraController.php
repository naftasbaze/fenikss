<?php

namespace App\Http\Controllers;

use App\foto;
use App\galerija;
use App\katalog;
use App\rinda;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class AdminGaleraController extends Controller
{
    //
    /**
     * Admin Albumu labošana
     */
    public function editAlbums($id)
    {

        $galerija=galerija::where('id', $id)
            ->with(['foto'])
            ->firstOrFail();
        //dd($galerija);

        return view('admin.albumi.labot',compact(['galerija']));
    }

    /*Dzešu vienu foto no galerijas*/
    public function destroy1foto($id)
    {

        foto::findorfail($id)->delete();

        return back();
    }

    /**
     * Admin foto galerija
     */
    public function addPhoto(Request $request, galerija $galerija)
    {
        //dd($galerija);
        $photo=$this->makePhoto($request->file('photo'));

         $galerija->pievienoFoto($photo);

        return;
    }

    protected function makePhoto(UploadedFile $file)
    {

        return foto::named($file)
            ->move($file);

    }



    /*Dzešu vienu foto no RINDAS*/
    public function delRindaFoto($id)
    {

        rinda::findorfail($id)->delete();
        rinda::findorfail($id)->delLinks();

        /*$rinda->deleteBildi();
        $rinda->delLinks();*/
        return \Redirect::back()->withSuccess( 'Attēls izdzēsts!' );
    }

    /**
     * Admin pievieno rindas foto
     */
    public function rindaFoto(Request $request, rinda $rinda)
    {

        $validator= $request->validate([
            'bilde' => 'dimensions:min_width=650,min_height=488',
        ]);

        $bilde=$this->makeBilde($request->file('bilde'), 650, 488);

        $rinda->pievienoBildi($bilde);

        return;
    }

    /**
     * Admin pievieno PARALLAX foto
     */
    public function paraFoto(Request $request, rinda $rinda)
    {

        $validator= $request->validate([
            'bilde' => 'dimensions:min_width=1920,min_height=1080',
        ]);

        $bilde=$this->makeBilde($request->file('bilde'), 1920, 1080);

        $rinda->pievienoBildi($bilde);

        return;
    }

    protected function makeBilde(UploadedFile $file, $plat, $augst)
    {
        return rinda::named($file)
            ->move($file, $plat, $augst);
    }

    /**
     * Admin KATALOGS
     */

    /*Dzešu vienu foto no KATALOGA*/
    public function delKataFoto(Request $request, $id)
    {

        if (isset($request->BTNlv)){
            $valoda='lv';
        }elseif(isset($request->BTNen)){
            $valoda='en';
        }elseif(isset($request->BTNru)){
            $valoda='ru';
        }
        //$valoda=$this->getValoda($request);
       // dd($valoda);
        katalog::findorfail($id)->deleteBilde($valoda);
        katalog::findorfail($id)->delLinks($valoda);

        return \Redirect::back()->withSuccess( 'Attēls izdzēsts!' );
    }


    /*Pieliek foto pie rindas*/
    public function kataFoto(Request $request, katalog $katalog)
    {

        echo $request;
        $request->validate([
            'bilde' => 'dimensions:min_width=960,min_height=1080',
        ]);

        $valoda=$this->getValoda($request);

        $bilde=$this->katBilde($request->file($valoda));

        $katalog->pievienoBildi($bilde, $valoda);

        return;
    }

    protected function katBilde(UploadedFile $file)
    {
        return katalog::named($file)
            ->move($file, 960, 1080);
    }


    protected function getValoda(Request $request)
    {
        $valoda="";
        if (isset($request->bildeLV)){
            $valoda='bildeLV';
        }elseif(isset($request->bildeEN)){
            $valoda='bildeEN';
        }elseif(isset($request->bildeRU)){
            $valoda='bildeRU';
        }

        return $valoda;
    }


}
