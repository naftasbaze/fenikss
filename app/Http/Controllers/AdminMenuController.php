<?php

namespace App\Http\Controllers;

use App\submenu;
use App\topmenu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

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
        $lapas = db::table('lapas')
            ->orderBy('vietaLimeni', 'asc')
            ->get();

        return view('admin.izvelne.labot',compact(['topmenu', 'lapas']));
    }

    public function updateMenu(Request $request, $id)
    {
        App::setLocale('lv');

        $topmenu = topmenu::where('id',$id)
            ->firstOrFail();

        $this->validate($request, [
             'nosaukums_lv' => 'required',
             'nosaukums_en' => 'required',
             'nosaukums_ru' => 'required',
            'vietaLimeni' => 'required',
            'slug' => 'unique:topmenus,slug,'.$topmenu->id,
        ]);

        $topmenu->nosaukums_lv=$request->nosaukums_lv;
        $topmenu->nosaukums_en=$request->nosaukums_en;
        $topmenu->nosaukums_ru=$request->nosaukums_ru;
        $topmenu->vietaLimeni=$request->vietaLimeni;
        $topmenu->slug=$request->slug;
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
