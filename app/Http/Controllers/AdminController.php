<?php

namespace App\Http\Controllers;

use App\topmenu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Admin sākums
     */
    public function index()
    {

        return view('admin.home');
    }




    /**
     * Admin lapu saraksts
     */
    public function lapas()
    {

        /*        $statLitotaji=$this->getLiet();
                $statKomenti=$this->getKomt();
                $statSkola=$this->getSchool();*/

        return view('admin.home',compact([]));
    }

    /**
     * Admin foto galerijas
     */
    public function galerijas()
    {

        /*        $statLitotaji=$this->getLiet();
                $statKomenti=$this->getKomt();
                $statSkola=$this->getSchool();*/

        return view('admin.home',compact([]));
    }
}
