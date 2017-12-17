<?php

use Illuminate\Database\Seeder;

class topmenuSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('topmenus')->get()->count() == 0){

            DB::table('topmenus')->insert([

                [
                    'nosaukums_lv' => 'Par mums',
                    'nosaukums_en' => 'About us',
                    'nosaukums_ru' => 'Про нас',
                    'slug' => str_slug('Par mums'),
                    'aktivs' => 1,
                    'vietaLimeni' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Pakalpojumi',
                    'nosaukums_en' => 'Service',
                    'nosaukums_ru' => 'Услуги',
                    'slug' => str_slug('Pakalpojumi'),
                    'aktivs' => 1,
                    'vietaLimeni' => 2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Fotogalerija',
                    'nosaukums_en' => 'Gallery',
                    'nosaukums_ru' => 'Фотогалерея',
                    'slug' => str_slug('Fotogalerija'),
                    'aktivs' => 1,
                    'vietaLimeni' => 3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Jautājumi',
                    'nosaukums_en' => 'Questions',
                    'nosaukums_ru' => 'Вопросы',
                    'slug' => str_slug('Jautājumi'),
                    'aktivs' => 1,
                    'vietaLimeni' => 4,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Kontakti',
                    'nosaukums_en' => 'Contacts',
                    'nosaukums_ru' => 'Контакты',
                    'slug' => str_slug('Kontakti'),
                    'aktivs' => 1,
                    'vietaLimeni' => 5,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
