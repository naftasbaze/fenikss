<?php

use Illuminate\Database\Seeder;

class lapasSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('lapas')->get()->count() == 0){

            DB::table('lapas')->insert([

                [
                    'nosaukums_lv' => 'Par mums',
                    'nosaukums_en' => 'About us',
                    'nosaukums_ru' => 'Про нас',
                    'slug' => str_slug('Par mums'),
                    'aktivs' => 1,
                    'tips' => 0,
                    'vietaLimeni' => 2,
                    'virsraksts_lv' => 'Par mums',
                    'virsraksts_en' => 'About us',
                    'virsraksts_ru' => 'Про нас',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Pakalpojumi',
                    'nosaukums_en' => 'Service',
                    'nosaukums_ru' => 'Услуги',
                    'slug' => str_slug('Pakalpojumi'),
                    'aktivs' => 1,
                    'tips' => 0,
                    'vietaLimeni' => 6,
                    'virsraksts_lv' => 'Pakalpojumi',
                    'virsraksts_en' => 'Service',
                    'virsraksts_ru' => 'Услуги',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Fotogalerija',
                    'nosaukums_en' => 'Gallery',
                    'nosaukums_ru' => 'Фотогалерея',
                    'slug' => str_slug('Fotogalerija'),
                    'aktivs' => 1,
                    'tips' => 1,
                    'vietaLimeni' => 3,
                    'virsraksts_lv' => 'Fotogalerija',
                    'virsraksts_en' => 'Gallery',
                    'virsraksts_ru' => 'Фотогалерея',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Jautājumi',
                    'nosaukums_en' => 'Questions',
                    'nosaukums_ru' => 'Вопросы',
                    'slug' => str_slug('Jautājumi'),
                    'aktivs' => 1,
                    'tips' => 6,
                    'vietaLimeni' => 8,
                    'virsraksts_lv' => 'Jautājumi',
                    'virsraksts_en' => 'Questions',
                    'virsraksts_ru' => 'Questions',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Kontakti',
                    'nosaukums_en' => 'Contacts',
                    'nosaukums_ru' => 'Контакты',
                    'slug' => str_slug('Kontakti'),
                    'aktivs' => 1,
                    'tips' => 3,
                    'vietaLimeni' => 9,
                    'virsraksts_lv' => '',
                    'virsraksts_en' => '',
                    'virsraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Video',
                    'nosaukums_en' => 'Video',
                    'nosaukums_ru' => 'Bideo',
                    'slug' => str_slug('video'),
                    'aktivs' => 1,
                    'tips' => 4,
                    'vietaLimeni' => 1,
                    'virsraksts_lv' => 'Video',
                    'virsraksts_en' => 'Video',
                    'virsraksts_ru' => 'Bideo',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Parallax',
                    'nosaukums_en' => 'Parallax',
                    'nosaukums_ru' => 'параллакс',
                    'slug' => str_slug('Parallax'),
                    'aktivs' => 1,
                    'tips' => 2,
                    'vietaLimeni' => 7,
                    'virsraksts_lv' => 'Parallax',
                    'virsraksts_en' => 'Parallax',
                    'virsraksts_ru' => 'параллакс',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Akcija',
                    'nosaukums_en' => 'Action',
                    'nosaukums_ru' => 'Akcija RU',
                    'slug' => str_slug('akcija'),
                    'aktivs' => 1,
                    'tips' => 5,
                    'vietaLimeni' => 4,
                    'virsraksts_lv' => 'Akcija virsr',
                    'virsraksts_en' => 'Action',
                    'virsraksts_ru' => 'Akcija RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Katalogs',
                    'nosaukums_en' => 'Catllogue',
                    'nosaukums_ru' => 'Katalog RU',
                    'slug' => str_slug('katlogs'),
                    'aktivs' => 1,
                    'tips' => 7,
                    'vietaLimeni' => 5,
                    'virsraksts_lv' => 'Katalogs virsr',
                    'virsraksts_en' => 'Katalogs EN',
                    'virsraksts_ru' => 'Katalogs RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
