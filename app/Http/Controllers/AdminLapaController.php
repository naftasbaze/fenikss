<?php

namespace App\Http\Controllers;

use App\galerija;
use App\katalog;
use App\kontakt;
use App\lapa;
use App\rinda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class AdminLapaController extends Controller
{


    /**
     * Admin lapu saraksts
     */
    public function lapas()
    {

        $lapas = db::table('lapas')
            //->groupBy('specte_id')
            ->orderBy('vietaLimeni', 'asc')
            ->get();

        return view('admin.lapas.lapas',compact(['lapas']));
    }

    /*Labot/apskatīt  vienu rindu*/
    public function rindas($id)
    {
        $lapa=lapa::with('rinda')
            ->where('id',$id)->firstOrFail();
        //dd($lapa);

        //Tipi
        if($lapa->tips == 0){

            //rinda
            return view('admin.rinda.rindas',compact(['lapa']));

        }elseif($lapa->tips == 1){

            //foto
            $galerijas= galerija::where('id','<>',1)
            ->get();
            return view('admin.galerija.galerijas',compact(['lapa', 'galerijas']));

        }elseif($lapa->tips == 2){

            //parallax
            return view('admin.parallax.labot',compact(['lapa']));

        }elseif($lapa->tips == 3){

            //kontakti
            $kontakti= kontakt::where('id',1)->firstOrFail();
            return view('admin.kontakti.labot',compact(['kontakti']));

        }elseif($lapa->tips == 4){

            //video
            return view('admin.video.labot',compact(['lapa']));

        }elseif($lapa->tips == 5){

            //akcija
            return view('admin.akcija.labot',compact(['lapa']));

        }elseif($lapa->tips == 6){

            //jautājumiBUJ
            return view('admin.buj.buji',compact(['lapa']));

        }elseif($lapa->tips == 7){

            //katalogs
            $katalogs= katalog::get();
            return view('admin.katalogs.kat',compact(['lapa','katalogs']));

        }

    }

    /**
     * Admin labot RINDU
     */
    public function editRinda($id)
    {

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        return view('admin.rinda.labot',compact(['rinda']));
    }


    /* Sglabā izmaiņas RINDA*/
    public function updateRinda(Request $request, $id)
    {

        $this->validate($request, [
           /* 'titleLV' => 'required',
            'titleEN' => 'required',
            'titleRU' => 'required',*/
            'rakstsLV' => 'required',
            'rakstsEN' => 'required',
            'rakstsRU' => 'required',
            'vietaLimeni' => 'required',
        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->titleLV;
        $rinda->nosaukums_en=$request->titleEN;
        $rinda->nosaukums_ru=$request->titleRU;
        $rinda->raksts_lv=$request->rakstsLV;
        $rinda->raksts_en=$request->rakstsEN;
        $rinda->raksts_ru=$request->rakstsRU;
        $rinda->vietaLimeni=$request->vietaLimeni;
        $rinda->izkartojums=$request->izkartojums;
        $rinda->ir_publisks=isset($request->ir_publisks);

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Admin labot KONTAKTI
     */
    public function editKontakti($id)
    {

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        return view('admin.rinda.labot',compact(['rinda']));
    }


    /*Sglabā izmaiņas KONTAKTI*/
    public function updateKontakti(Request $request, $id)
    {

        $this->validate($request, [
            'tel1' => 'required',
            'tel2' => 'required',
            'tel3' => 'required',
            'epasts' => 'required',
            'registraNr' => 'required',
            'pvnNr' => 'required',
            'vienotaisNr' => 'required',
            'kontaNr' => 'required',
            'www' => 'required',
            'keywords' => 'required',
            'nosaukums_en' => 'required',
            'adrese_en' => 'required',
            'banka_en' => 'required',
            'banknos_en' => 'required',
            'dlaiks_en' => 'required',
            'dlaiknos_en' => 'required',
            'desription_en' => 'required',
            'nosaukums_lv' => 'required',
            'adrese_lv' => 'required',
            'banka_lv' => 'required',
            'banknos_lv' => 'required',
            'dlaiks_lv' => 'required',
            'dlaiknos_lv' => 'required',
            'saits_lv' => 'required',
            'desription_lv' => 'required',
            'nosaukums_ru' => 'required',
            'adrese_ru' => 'required',
            'banka_ru' => 'required',
            'banknos_ru' => 'required',
            'dlaiks_ru' => 'required',
            'dlaiknos_ru' => 'required',
            'saits_ru' => 'required',
            'desription_ru' => 'required',
        ]);

        $kontakti= kontakt::where('id',1)->firstOrFail();

        $kontakti->tel1=$request->tel1;
        $kontakti->tel2=$request->tel2;
        $kontakti->tel3=$request->tel3;
        $kontakti->epasts=$request->epasts;
        $kontakti->registraNr=$request->registraNr;
        $kontakti->pvnNr=$request->pvnNr;
        $kontakti->vienotaisNr=$request->vienotaisNr;
        $kontakti->kontaNr=$request->kontaNr;
        $kontakti->www=$request->www;
        $kontakti->keywords=$request->keywords;
        $kontakti->nosaukums_en=$request->nosaukums_en;
        $kontakti->adrese_en=$request->adrese_en;
        $kontakti->banka_en=$request->banka_en;
        $kontakti->banknos_en=$request->banknos_en;
        $kontakti->dlaiks_en=$request->dlaiks_en;
        $kontakti->dlaiknos_en=$request->dlaiknos_en;
        $kontakti->saits_en=$request->saits_en;
        $kontakti->desription_en=$request->desription_en;
        $kontakti->nosaukums_lv=$request->nosaukums_lv;
        $kontakti->adrese_lv=$request->adrese_lv;
        $kontakti->banka_lv=$request->banka_lv;
        $kontakti->banknos_lv=$request->banknos_lv;
        $kontakti->dlaiks_lv=$request->dlaiks_lv;
        $kontakti->dlaiknos_lv=$request->dlaiknos_lv;
        $kontakti->saits_lv=$request->saits_lv;
        $kontakti->desription_lv=$request->desription_lv;
        $kontakti->nosaukums_ru=$request->nosaukums_ru;
        $kontakti->adrese_ru=$request->adrese_ru;
        $kontakti->banka_ru=$request->banka_ru;
        $kontakti->banknos_ru=$request->banknos_ru;
        $kontakti->dlaiks_ru=$request->dlaiks_ru;
        $kontakti->dlaiknos_ru=$request->dlaiknos_ru;
        $kontakti->saits_ru=$request->saits_ru;
        $kontakti->desription_ru=$request->desription_ru;

        $kontakti->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Admin labot BUJ
     */
    public function editBUJ($id)
    {

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        return view('admin.buj.labot',compact(['rinda']));
    }

    /*Sglabā izmaiņas BUJ*/
    public function updateBUJ(Request $request, $id)
    {

        $this->validate($request, [
             'titleLV' => 'required',
             'titleEN' => 'required',
             'titleRU' => 'required',
            'rakstsLV' => 'required',
            'rakstsEN' => 'required',
            'rakstsRU' => 'required',
            'vietaLimeni' => 'required',
        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->titleLV;
        $rinda->nosaukums_en=$request->titleEN;
        $rinda->nosaukums_ru=$request->titleRU;
        $rinda->raksts_lv=$request->rakstsLV;
        $rinda->raksts_en=$request->rakstsEN;
        $rinda->raksts_ru=$request->rakstsRU;
        $rinda->vietaLimeni=$request->vietaLimeni;
        $rinda->ir_publisks=isset($request->ir_publisks);

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Admin labot BUJ
     */
    public function editGalerija($id)
    {

        $galerija = galerija::with('foto')
            ->where('id',$id)
            ->firstOrFail();

        return view('admin.galerija.labot',compact(['galerija']));
    }

    /*Sglabā izmaiņas BUJ*/
    public function updateGalerija(Request $request, $id)
    {

        /*$this->validate($request, [
            'vards' => 'required',
            'uzvards' => 'required'
        ]);*/

        /*$audzeknis= audzekni::findOrFail($id);

        $audzeknis->vards=$request->vards;
        $audzeknis->uzvards=$request->uzvards;
        $audzeknis->turpmak=$request->turpmak;

        $audzeknis->update();*/

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Admin labot LAPU
     */
    public function editLapa($id)
    {

        $vienaLapa = lapa::where('id',$id)
            ->firstOrFail();

        $tipi = db::table('kategors')->get();
        //dd($tipi);
        return view('admin.lapas.labot',compact(['vienaLapa', 'tipi']));
    }

    /*Sglabā izmaiņas LAPĀ*/
    public function updateLapa(Request $request, $id)
    {
        //dd(App::getLocale());
        $this->validate($request, [
            'titleLV' => 'required',
            'titleEN' => 'required',
            'titleRU' => 'required',
            'vietaLimeni' => 'required',
        ]);

        $lapa= lapa::findOrFail($id);

        $lapa->nosaukums_lv=$request->titleLV;
        $lapa->nosaukums_en=$request->titleEN;
        $lapa->nosaukums_ru=$request->titleRU;
        $lapa->vietaLimeni=$request->vietaLimeni;
        $lapa->aktivs=isset($request->aktivs);
        $lapa->tips=$request->tips;

        $lapa->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Admin labot Katalogu
     */
    public function editKatalogs($id)
    {

        $katalogs = katalog::where('id',$id)
            ->firstOrFail();

        $galerijas = galerija::select('id', 'nosaukums_lv')->get();
//dd($galerijas);
        return view('admin.katalogs.labot',compact(['katalogs', 'galerijas']));
    }

    /*Sglabā izmaiņas Katalogā*/
    public function updateKatalogs(Request $request, $id)
    {

        /*$this->validate($request, [
            'vards' => 'required',
            'uzvards' => 'required'
        ]);*/

        /*$audzeknis= audzekni::findOrFail($id);

        $audzeknis->vards=$request->vards;
        $audzeknis->uzvards=$request->uzvards;
        $audzeknis->turpmak=$request->turpmak;

        $audzeknis->update();*/

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }


    /**
     * Admin labot Rekvizītus
     */
    public function editRekviziti()
    {

        $rekvizi = kontakt::where('id',1)
            ->firstOrFail();
//dd($lapa);
        return view('admin.rekviziti.labot',compact(['rekvizi']));
    }

    /*Sglabā izmaiņas Katalogā*/
    public function updateRekviziti(Request $request, $id)
    {

        /*$this->validate($request, [
            'vards' => 'required',
            'uzvards' => 'required'
        ]);*/

        /*$audzeknis= audzekni::findOrFail($id);

        $audzeknis->vards=$request->vards;
        $audzeknis->uzvards=$request->uzvards;
        $audzeknis->turpmak=$request->turpmak;

        $audzeknis->update();*/

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /*Sglabā izmaiņas VIDEO*/
    public function updateVideo(Request $request, $id)
    {

        $this->validate($request, [
            'titleLV' => 'required',
            'titleEN' => 'required',
            'titleRU' => 'required',
            'poga1' => 'required',
            'poga2' => 'required',
        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->titleLV;
        $rinda->nosaukums_en=$request->titleEN;
        $rinda->nosaukums_ru=$request->titleRU;
        $rinda->raksts_lv=$request->rakstsLV;
        $rinda->raksts_en=$request->rakstsEN;
        $rinda->raksts_ru=$request->rakstsRU;
        $rinda->fotoLinks=$request->poga1;
        $rinda->fotoThumb=$request->poga2;

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /*Sglabā izmaiņas Akcija*/
    public function updateAkcija(Request $request, $id)
    {
//dd($request);
        $this->validate($request, [
            'titleLV' => 'required',
            'titleEN' => 'required',
            'titleRU' => 'required',
            'rakstsLV' => 'required',
            'rakstsEN' => 'required',
            'rakstsRU' => 'required',
        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->titleLV;
        $rinda->nosaukums_en=$request->titleEN;
        $rinda->nosaukums_ru=$request->titleRU;
        $rinda->raksts_lv=$request->rakstsLV;
        $rinda->raksts_en=$request->rakstsEN;
        $rinda->raksts_ru=$request->rakstsRU;

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

}
