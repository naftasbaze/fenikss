<?php

use Illuminate\Database\Seeder;

class submenuSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('submenus')->get()->count() == 0){

            DB::table('submenus')->insert([

                [
                    'nosaukums_lv' => 'Trepes',
                    'nosaukums_en' => 'Stairs',
                    'nosaukums_ru' => 'Лестница',
                    'topmenu_id' => 3,
                    'slug' => str_slug('Trepes'),
                    'aktivs' => 0,
                    'vietaLimeni' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Terases',
                    'nosaukums_en' => 'Terraces',
                    'nosaukums_ru' => 'Террасы',
                    'topmenu_id' => 3,
                    'slug' => str_slug('Terases'),
                    'aktivs' => 0,
                    'vietaLimeni' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Dārza dekori',
                    'nosaukums_en' => 'Gardens decors',
                    'nosaukums_ru' => 'Декоры сада',
                    'topmenu_id' => 3,
                    'slug' => str_slug('dekori'),
                    'aktivs' => 0,
                    'vietaLimeni' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => ' Vārti un žogi',
                    'nosaukums_en' => 'Gates and fences',
                    'nosaukums_ru' => ' Ворота и заборы',
                    'topmenu_id' => 3,
                    'slug' => str_slug('žogi'),
                    'aktivs' => 0,
                    'vietaLimeni' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
