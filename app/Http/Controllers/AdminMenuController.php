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

    public function updateMenu(Request $request, $id)
    {
        $this->validate($request, [
             'nosaukums_lv' => 'required',
             'nosaukums_en' => 'required',
             'nosaukums_ru' => 'required',
            'vietaLimeni' => 'required',
        ]);

        $topmenu = topmenu::where('id',$id)
            ->firstOrFail();


        $topmenu->nosaukums_lv=$request->nosaukums_lv;
        $topmenu->nosaukums_en=$request->nosaukums_en;
        $topmenu->nosaukums_ru=$request->nosaukums_ru;
        $topmenu->vietaLimeni=$request->vietaLimeni;
        $topmenu->slug=str_slug($request->nosaukums_lv,"-");
        $topmenu->aktivs=isset($request->aktivs);

        $topmenu->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );
    }

    /*Labot/apskatīt  vienu*/
    public function editSub($id)
    {
        $submenu=submenu::where('id',$id)->firstOrFail();
        $topmenu = topmenu::all();

        return view('admin.izvelne.subLabot',compact(['submenu', 'topmenu']));
    }

    public function updateSub(Request $request, $id)
    {
        $this->validate($request, [
            'nosaukums_lv' => 'required',
            'nosaukums_en' => 'required',
            'nosaukums_ru' => 'required',
            'vietaLimeni' => 'required',
            'topmenu_id' => 'required',
        ]);

        $submenu = submenu::where('id',$id)
            ->firstOrFail();

        $submenu->nosaukums_lv=$request->nosaukums_lv;
        $submenu->nosaukums_en=$request->nosaukums_en;
        $submenu->nosaukums_ru=$request->nosaukums_ru;
        $submenu->vietaLimeni=$request->vietaLimeni;
        $submenu->slug=str_slug($request->nosaukums_lv,"-");
        $submenu->aktivs=isset($request->aktivs);
        $submenu->topmenu_id=$request->topmenu_id;

        $submenu->update();

        return \Redirect::back()->withSuccess( 'Izmaiņas saglabātas!' );
    }
}
