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

        /*$galerijas=galerija::with(['foto'])->get();*/

        $galerijas=galerija::with(array('foto' => function($guery)
        {
            $guery->first();
        }
        ))
        //->chunk();
        ->get();

        $cipars=floor($galerijas->count()/3)*3;
       // dd($cipars);
        $galerijas=$galerijas->take($cipars);

        $i=0;
        foreach ($galerijas as $galerija) {
            if($i % 3 ==0){
                $galerija['jauns']=true;
            }else{
                $galerija['jauns']=false;
            }
            $i++;
        }


       dd($galerijas);


        $lapas=lapa::with(['rinda'])
            ->where('aktivs',1)
            ->orderBy('vietaLimeni', 'asc')
            ->get();
        //dd($lapas);
        return view('home.home',compact(['lapas', 'galerijas']));
    }
}
