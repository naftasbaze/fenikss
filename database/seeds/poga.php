<?php

use Illuminate\Database\Seeder;

class poga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(DB::table('pogas')->get()->count() == 0){

            DB::table('pogas')->insert([

                [
                    'id' => 1,
                    'nosaukums_lv' => 'Sazinieties ar mums',
                    'nosaukums_en' => 'Contact us',
                    'nosaukums_ru' => 'Контакты',
                    'BtnKrasa' => '',
                    'BtnLinks' => 'kontakti',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 2,
                    'nosaukums_lv' => 'Apskatiet darbus',
                    'nosaukums_en' => 'View photo',
                    'nosaukums_ru' => 'Посмотреть фото',
                    'BtnKrasa' => '',
                    'BtnLinks' => 'fotogalerija',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 3,
                    'nosaukums_lv' => 'Attēlu galerija',
                    'nosaukums_en' => 'Image gallery',
                    'nosaukums_ru' => 'Фото галерия',
                    'BtnKrasa' => '',
                    'BtnLinks' => 'fotogalerija',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 4,
                    'nosaukums_lv' => 'Akreditācija',
                    'nosaukums_en' => 'Accreditation',
                    'nosaukums_ru' => 'Аккредитация',
                    'BtnKrasa' => '',
                    'BtnLinks' => 'galerijaID-6',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => 5,
                    'nosaukums_lv' => 'Youtube',
                    'nosaukums_en' => 'Youtube',
                    'nosaukums_ru' => 'Youtube',
                    'BtnKrasa' => '',
                    'BtnLinks' => 'https://youtu.be/-WZrLYHSmQg',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
