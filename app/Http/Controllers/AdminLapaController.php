<?php

namespace App\Http\Controllers;

use App\galerija;
use App\kontakt;
use App\lapa;
use App\rinda;
use Illuminate\Http\Request;
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

    /*Labot/apskatīt  vienu*/
    public function rindas($id)
    {
        $lapa=lapa::with('rinda')
            ->where('id',$id)->firstOrFail();
        //dd($lapa);

        //Tipi
        if($lapa->tips == 0){

            //lapas
            return view('admin.rinda.rindas',compact(['lapa']));

        }elseif($lapa->tips == 1){

            //foto
            $galerijas= galerija::get();
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


    /*Sglabā izmaiņas RINDA*/
    public function updateRinda(Request $request, $id)
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

    /*Sglabā izmaiņas KONTAKTI*/
    public function updateKontakti(Request $request, $id)
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

}
