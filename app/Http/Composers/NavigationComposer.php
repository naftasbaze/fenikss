<?php
namespace App\Http\Composers;

use App\topmenu;
use LukeSnowden\Menu\Menu;
use Illuminate\Contracts\View\View;

class NavigationComposer {

    public function compose(View $view)
    {
        $view->with(['menu'=>$this->iepilduMenu()]);
    }

    public function iepilduMenu()
    {
        $vissMenu=topmenu::with(array('submenu'=>function($query)
        {
            $query->where('aktivs', 1);
        }

        ))->where('aktivs','1')->orderBy('vietaLimeni', 'asc')->get();

        $this->getAllMenu($vissMenu);
        //dd(Menu::render('galvenis'));

        $menu=Menu::render('galvenis',array(
            'class' => 'nav navbar-nav ',
            'data-hover'=>"dropdown",
            'data-animations'=>"zoomIn fadeIn fadeInUp fadeIn"), 'ul');

        return $menu;

    }



    public function getAllMenu($menu )
    {
        foreach ($menu as $level1) {
//dd($level1);
            Menu::addItem(array(
                'text' => $level1->nosaukums,
                'URL' => url($level1->slug),
                'reference' => $level1->slug,
                'weight' => $level1->vietaLimeni))->toMenu('galvenis');
            foreach ($level1->submenu as $level2) {
               // dd($level2->nosaukums);
                Menu::addItem(array(
                    'text' => $level2->nosaukums,
                    'URL' => url($level1->slug . '#' . $level2->slug),
                    'reference' => $level2->slug,
                    'parent' => $level1->slug,
                    'class' => 'dropdown-submenu',
                    'weight' => $level2->vietaLimeni))->toMenu('galvenis');
            }
        }

        Menu::setMenuType('navMega', 'galvenis', 'LukeSnowden\Menu\Styles');

        return;
    }


}