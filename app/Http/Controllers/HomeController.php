<?php

namespace App\Http\Controllers;

use App\galerija;
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

        $galerijas=galerija::with(['foto'])->get();

       dd($galerijas);
        $lapas=lapa::with(['rinda'])
            ->where('aktivs',1)
            ->orderBy('vietaLimeni', 'asc')
            ->get();
        //dd($lapas);
        return view('home.home',compact(['lapas', 'adrese']));
    }
}
