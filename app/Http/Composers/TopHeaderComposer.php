<?php
namespace App\Http\Composers;

use App\kontakt;
use Illuminate\Contracts\View\View;

class TopHeaderComposer {

    public function compose(View $view)
    {
        $view->with(['adrese'=>$this->iepilduAdresi()]);
    }

    public function iepilduAdresi()
    {
        return $adrese=kontakt::firstOrFail();;

    }
}