<?php

namespace App\Http\Controllers;

use App\galerija;
use App\kontakt;
use App\lapa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $galerijas=galerija::has('foto')
            ->with('foto')
            ->get();
        //dd($galerijas);

        $galerNos=lapa::where('tips',1)->first();


        $lapas=lapa::with(['rinda'=> function ($query){
            $query->where('ir_publisks', 1);
        }])
            ->where('aktivs',1)
            ->orderBy('vietaLimeni', 'asc')
            ->get();
        //dd($lapas);

        $adrese=kontakt::firstOrFail();

        return view('home.home',compact(['lapas', 'galerijas', 'galerNos', 'adrese']));
    }
}
