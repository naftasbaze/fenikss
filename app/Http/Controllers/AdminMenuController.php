<?php

namespace App\Http\Controllers;

use App\submenu;
use App\topmenu;
use Illuminate\Http\Request;

class AdminMenuController extends Controller
{
    /**
     * Admin menu saraksts
     */
    public function izvelne()
    {
        $izvelneVisa = topmenu::with(['submenu'])
            //->groupBy('specte_id')
            ->orderBy('vietaLimeni', 'asc')
            ->get();

        // dd($izvelneVisa);
        return view('admin.izvelne.izvelne',compact(['izvelneVisa']));
    }

    /*Labot/apskatīt  vienu*/
    public function editMenu($id)
    {

        $topmenu=topmenu::where('id',$id)->firstOrFail();
        //dd($topmenu);
        return view('admin.izvelne.labot',compact(['topmenu']));
    }

    public function updateMenu()
    {

    }

    /*Labot/apskatīt  vienu*/
    public function editSub($id)
    {
        $submenu=submenu::where('id',$id)->firstOrFail();
        return view('admin.izvelne.subLabot',compact(['submenu']));
    }

    public function updateSub()
    {

    }
}
