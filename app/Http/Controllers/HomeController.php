<?php

namespace App\Http\Controllers;

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

        $adrese=kontakt::firstOrFail(); //->get();
       // dd($adrese);
        $lapas=lapa::with(['rinda'])
            ->where('aktivs',1)
            ->orderBy('vietaLimeni', 'asc')
            ->get();
        //dd($lapas);
        return view('home.home',compact(['lapas', 'adrese']));
    }
}
