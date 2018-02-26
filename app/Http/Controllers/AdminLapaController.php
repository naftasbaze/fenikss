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
            $pogas= db::table('pogas')->get();
            return view('admin.parallax.labot',compact(['lapa', 'pogas']));

        }elseif($lapa->tips == 3){

            //kontakti
            $kontakti= kontakt::where('id',1)->firstOrFail();
            return view('admin.kontakti.labot',compact(['lapa', 'kontakti']));

        }elseif($lapa->tips == 4){

            //video
            $pogas= db::table('pogas')->get();
            return view('admin.video.labot',compact(['lapa', 'pogas']));

        }elseif($lapa->tips == 5){

            //akcija
            $pogas= db::table('pogas')->get();
            return view('admin.akcija.labot',compact(['lapa', 'pogas']));

        }elseif($lapa->tips == 6){

            //jautājumiBUJ
            return view('admin.buj.buji',compact(['lapa']));

        }elseif($lapa->tips == 7){

            //katalogs
            $katalogs= katalog::orderBy('vietaLimeni', 'asc')->get();
            return view('admin.katalogs.kat',compact(['lapa','katalogs']));
        //dd($katalogs);
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
        App::setLocale('lv');
        //$locale = App::getLocale();
       // dd($locale);
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
        $rinda->fotoKat=$request->fotoKat;
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

        App::setLocale('lv');

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

        App::setLocale('lv');

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
     * Saglabā jaunu Jautājumu
     */
    public function storeBUJ(Request $request)
    {

        App::setLocale('lv');

        $this->validate($request, [
            'nosaukums_lv2' => 'required',
            'nosaukums_en2' => 'required',
            'nosaukums_ru2' => 'required',

        ]);

        $rinda= new rinda;

        $rinda->nosaukums_lv=$request->nosaukums_lv2;
        $rinda->nosaukums_en=$request->nosaukums_en2;
        $rinda->nosaukums_ru=$request->nosaukums_ru2;
        $rinda->raksts_lv=$request->raksts_lv2;
        $rinda->raksts_en=$request->raksts_en2;
        $rinda->raksts_ru=$request->raksts_ru2;
        $rinda->slug=str_slug($request->nosaukums_lv2);
        $rinda->lapa_id=$request->lapaID;

        $rinda->save();

        //dd($galerija->id);
        return redirect('/admin/lapas/'.$rinda->lapa_id .'/rindas')->withSuccess( 'Jautājums veiksmīgi saglabāts!' );
    }


    /**
     * Admin labot Galeriju
     */
    public function editGalerija($id)
    {

        $galerija = galerija::with('foto')
            ->where('id',$id)
            ->firstOrFail();

        return view('admin.galerija.labot',compact(['galerija']));
    }

    /*Sglabā izmaiņas GALERIJĀ*/
    public function updateGalerija(Request $request, $id)
    {

        App::setLocale('lv');

        $this->validate($request, [
            'nosaukums_lv' => 'required',
            'nosaukums_en' => 'required',
            'nosaukums_ru' => 'required',
            'apaksnos_lv' => 'required',
            'apaksnos_en' => 'required',
            'apaksnos_ru' => 'required',
        ]);

        $galerija = galerija::findOrFail($id);

        $galerija->nosaukums_lv=$request->nosaukums_lv;
        $galerija->nosaukums_en=$request->nosaukums_en;
        $galerija->nosaukums_ru=$request->nosaukums_ru;
        $galerija->apaksnos_lv=$request->apaksnos_lv;
        $galerija->apaksnos_en=$request->apaksnos_en;
        $galerija->apaksnos_ru=$request->apaksnos_ru;

        $galerija->update();

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
        App::setLocale('lv');

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

        $katalogs = katalog::where('id',$id)
            ->findOrFail($id);

        $katalogs->vietaLimeni=$request->vietaLimeni;
        $katalogs->galerija_id=$request->galerija_id;
        $katalogs->aktivs=isset($request->aktivs);
        $katalogs->btn_krasa=$request->btn_krasa;
        $katalogs->btn_top=$request->btn_top;
        $katalogs->btn_left=$request->btn_left;
        $katalogs->btnlabel_lv=$request->btnlabel_lv;
        $katalogs->btnlabel_en=$request->btnlabel_en;
        $katalogs->btnlabel_ru=$request->btnlabel_ru;

        $katalogs->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Saglabā jaunu Kataloga atvērumu
     */
    public function storeKatalogs(Request $request)
    {

        App::setLocale('lv');

        $katalogs= new katalog;

        $katalogs->galerija_id=1;
        $katalogs->aktivs=0;
        $katalogs->btn_krasa='btn-b-base-1';
        $katalogs->btn_top=90;
        $katalogs->btn_left=57;
        $katalogs->btnlabel_en='Click';
        $katalogs->btnlabel_lv='Apskatīt';
        $katalogs->btnlabel_ru='Посмотрите';
        $katalogs->btn_links='';

        $katalogs->save();

        //dd($katalogs->id);
        return redirect('/admin/katalogs/'.$katalogs->id .'/labot')->withSuccess( 'Kataloga lappuse veiksmīgi izveidots!' );
    }

    /**
     * Admin labot Rekvizītus
     */
/*    public function editRekviziti()
    {

        $rekvizi = kontakt::where('id',1)
            ->firstOrFail();
//dd($lapa);
        return view('admin.rekviziti.labot',compact(['rekvizi']));
    }*/



    /*Sglabā izmaiņas VIDEO*/
    public function updateVideo(Request $request, $id)
    {

        App::setLocale('lv');

        $this->validate($request, [
            'titleLV' => 'required',
            'titleEN' => 'required',
            'titleRU' => 'required',
            /*'poga1' => 'required',
            'poga2' => 'required',*/
        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->titleLV;
        $rinda->nosaukums_en=$request->titleEN;
        $rinda->nosaukums_ru=$request->titleRU;
        $rinda->raksts_lv=$request->rakstsLV;
        $rinda->raksts_en=$request->rakstsEN;
        $rinda->raksts_ru=$request->rakstsRU;
        $rinda->poga1_id=$request->poga1;
        $rinda->poga2_id=$request->poga2;

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /*Sglabā izmaiņas Akcija*/
    public function updateAkcija(Request $request, $id)
    {
        App::setLocale('lv');

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
        $rinda->poga1_id=$request->poga1;

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /*Sglabā izmaiņas VIDEO*/
    public function updateParallax(Request $request, $id)
    {

        App::setLocale('lv');

        $this->validate($request, [
            'titleLV' => 'required',
            'titleEN' => 'required',
            'titleRU' => 'required',
        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->titleLV;
        $rinda->nosaukums_en=$request->titleEN;
        $rinda->nosaukums_ru=$request->titleRU;
        $rinda->raksts_lv=$request->rakstsLV;
        $rinda->raksts_en=$request->rakstsEN;
        $rinda->raksts_ru=$request->rakstsRU;
        $rinda->poga1_id=$request->poga1;
        $rinda->poga2_id=$request->poga2;

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Saglabā jaunu virsrakstu
     */
    public function store(Request $request)
    {

        App::setLocale('lv');

        $this->validate($request, [
            'nosaukums_lv' => 'required|min:5',

        ]);

         //dd($request);
        $rinda= new rinda;
        $rinda->nosaukums_lv=trim($request->nosaukums_lv);
        $rinda->slug=str_slug($request->nosaukums_lv);
        $rinda->lapa_id=$request->lapaID;
        $rinda->save();

        //dd($rinda->id);
        return redirect('/admin/lapas/'.$rinda->id .'/labot')->withSuccess( 'Ieraksts veiksmīgi saglabāts!' );
    }

    /* Sglabā izmaiņas RINDA*/
    public function updateFotoRinda(Request $request, $id)
    {
        App::setLocale('lv');
        //$locale = App::getLocale();
        // dd($locale);
        $this->validate($request, [
            'nosaukums_lv' => 'required',
            'nosaukums_en' => 'required',
            'nosaukums_ru' => 'required',

        ]);

        $rinda = rinda::where('id',$id)
            ->firstOrFail();

        $rinda->nosaukums_lv=$request->nosaukums_lv;
        $rinda->nosaukums_en=$request->nosaukums_en;
        $rinda->nosaukums_ru=$request->nosaukums_ru;
        $rinda->raksts_lv=$request->raksts_lv;
        $rinda->raksts_en=$request->raksts_en;
        $rinda->raksts_ru=$request->raksts_ru;

        $rinda->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );

    }

    /**
     * Saglabā jaunu Galeriju
     */
    public function storeFotoRinda(Request $request)
    {

        App::setLocale('lv');

        $this->validate($request, [
            'nosaukums_lv2' => 'required',
            'nosaukums_en2' => 'required',
            'nosaukums_ru2' => 'required',

        ]);

        $galerija= new galerija;

        $galerija->nosaukums_lv=$request->nosaukums_lv2;
        $galerija->nosaukums_en=$request->nosaukums_en2;
        $galerija->nosaukums_ru=$request->nosaukums_ru2;
        $galerija->apaksnos_lv=$request->raksts_lv2;
        $galerija->apaksnos_en=$request->raksts_en2;
        $galerija->apaksnos_ru=$request->raksts_ru2;

        $galerija->save();

        //dd($galerija->id);
        return redirect('/admin/albums/'.$galerija->id .'/labot')->withSuccess( 'Galerija veiksmīgi saglabāta!' );
    }

}
