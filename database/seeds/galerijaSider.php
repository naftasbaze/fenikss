<?php

use Illuminate\Database\Seeder;

class galerijaSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('galerijas')->get()->count() == 0){

            DB::table('galerijas')->insert([

                [
                    'nosaukums_lv' => 'Mākslas muzejs',
                    'nosaukums_en' => 'Mākslas muzejs EN',
                    'nosaukums_ru' => 'Mākslas muzejs RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Mūsu māja LV',
                    'nosaukums_en' => 'Mūsu māja EN',
                    'nosaukums_ru' => 'Mūsu māja RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Vācu vēstniecība LV',
                    'nosaukums_en' => 'Vācu vēstniecība EN',
                    'nosaukums_ru' => 'Vācu vēstniecība RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Montāžnieks-D LV',
                    'nosaukums_en' => 'Montāžnieks-D EN',
                    'nosaukums_ru' => 'Montāžnieks-D RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
