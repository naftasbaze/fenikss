<?php

namespace App\Http\Controllers;

use App\galerija;
use App\katalog;
use App\kontakt;
use App\lapa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$loc=App::getLocale();
        //dd($loc); push(['path'=>'public/images/1001.jpg']);

        $galerijas=galerija::has('foto')
            ->with(['foto'])
            ->get();
        //dd($galerijas);

        $katalogs=katalog::with(['galerja'])
            ->with(['galerja.foto'])
        ->where('aktivs',1)->orderBy('vietaLimeni', 'asc')->get();
        //dd($katalogs);

        $lapas=lapa::with(['rinda'=> function ($query){
            $query->where('ir_publisks', 1);
        }])
            ->with(['rinda.poga1'])
            ->with(['rinda.poga2'])
            ->where('aktivs',1)
            ->orderBy('vietaLimeni', 'asc')
            ->get();
        //dd($lapas);

        $adrese=kontakt::firstOrFail();

        return view('home.home',compact(['lapas', 'galerijas', 'katalogs', 'adrese']));
    }
}
