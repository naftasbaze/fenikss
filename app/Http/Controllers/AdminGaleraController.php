<?php

namespace App\Http\Controllers;

use App\foto;
use App\galerija;
use Illuminate\Http\Request;

class AdminGaleraController extends Controller
{
    //
    /**
     * Admin Albumu labošana
     */
    public function editAlbums($id)
    {

        $galerija=galerija::where('id', $id)
            ->with(['foto'])
            ->firstOrFail();
        //dd($galerija);

        return view('admin.albumi.labot',compact(['galerija']));
    }

    /*Dzešu vienu foto*/
    public function destroy($id)
    {

        foto::findorfail($id)->delete();

        return back();
    }
}
