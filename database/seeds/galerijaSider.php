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
                    'id' => '1',
                    'path' => 'galerijas/IM000082.jpg',
                    'thumbnail_path' => 'galerijas/IM000082_m.jpg',
                    'nosaukums_lv' => 'Mākslas muzejs',
                    'nosaukums_en' => 'Mākslas muzejs EN',
                    'nosaukums_ru' => 'Mākslas muzejs RU',
                    'apaksnos_lv' => 'Margas, lustras, rokturi',
                    'apaksnos_en' => 'Margas, lustras, rokturi EN',
                    'apaksnos_ru' => 'Margas, lustras, rokturi RU',
                    'apraksts_lv' => 'Apskatiet mūsu ieguldījumu Mākslas muzeja atjaunošanā',
                    'apraksts_en' => 'Apskatiet mūsu ieguldījumu Mākslas muzeja atjaunošanā EN',
                    'apraksts_ru' => 'Apskatiet mūsu ieguldījumu Mākslas muzeja atjaunošanā RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '2',
                    'path' => 'galerijas/IM000083.jpg',
                    'thumbnail_path' => 'galerijas/IM000083_m.jpg',
                    'nosaukums_lv' => 'Mūsu māja LV',
                    'nosaukums_en' => 'Mūsu māja EN',
                    'nosaukums_ru' => 'Mūsu māja RU',
                    'apaksnos_lv' => 'Varat apskatīt pie mums uz vietas',
                    'apaksnos_en' => 'Varat apskatīt pie mums uz vietas EN',
                    'apaksnos_ru' => 'Varat apskatīt pie mums uz vietas RU',
                    'apraksts_lv' => 'Apskatiet gadu gaitā uzkrātos paraugus',
                    'apraksts_en' => 'Apskatiet gadu gaitā uzkrātos paraugus EN',
                    'apraksts_ru' => 'Apskatiet gadu gaitā uzkrātos paraugus RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '3',
                    'path' => 'galerijas/IM000084.jpg',
                    'thumbnail_path' => 'galerijas/IM000084_m.jpg',
                    'nosaukums_lv' => 'Vācu vēstniecība LV',
                    'nosaukums_en' => 'Vācu vēstniecība EN',
                    'nosaukums_ru' => 'Vācu vēstniecība RU',
                    'apaksnos_lv' => 'Vācu vēstniecība',
                    'apaksnos_en' => 'Vācu vēstniecība EN',
                    'apaksnos_ru' => 'Vācu vēstniecība RU',
                    'apraksts_lv' => 'Vācu vēstniecība',
                    'apraksts_en' => 'Vācu vēstniecība EN',
                    'apraksts_ru' => 'Vācu vēstniecība RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '4',
                    'path' => 'galerijas/IM000085.jpg',
                    'thumbnail_path' => 'galerijas/IM000085_m.jpg',
                    'nosaukums_lv' => 'Skices LV',
                    'nosaukums_en' => 'Skices EN',
                    'nosaukums_ru' => 'Skices RU',
                    'apaksnos_lv' => 'Sākotnējās idejas',
                    'apaksnos_en' => 'Sākotnējās idejas EN',
                    'apaksnos_ru' => 'Sākotnējās idejas RU',
                    'apraksts_lv' => 'Mūs klientu un mūsu mēkslinieku skices darbiem',
                    'apraksts_en' => 'Mūs klientu un mūsu mēkslinieku skices darbiem EN',
                    'apraksts_ru' => 'Mūs klientu un mūsu mēkslinieku skices darbiem RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '5',
                    'path' => 'galerijas/IM000094.jpg',
                    'thumbnail_path' => 'galerijas/IM000094_m.jpg',
                    'nosaukums_lv' => 'Vārtiņi LV',
                    'nosaukums_en' => 'Vārtiņi EN',
                    'nosaukums_ru' => 'Vārtiņi RU',
                    'apaksnos_lv' => 'Vārtiņi',
                    'apaksnos_en' => 'Vārtiņi EN',
                    'apaksnos_ru' => 'Vārtiņi RU',
                    'apraksts_lv' => 'Vārtiņi LV',
                    'apraksts_en' => 'Vārtiņi EN',
                    'apraksts_ru' => 'Vārtiņi RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '6',
                    'path' => 'galerijas/IM000095.jpg',
                    'thumbnail_path' => 'galerijas/IM000095_m.jpg',
                    'nosaukums_lv' => 'Lustras LV',
                    'nosaukums_en' => 'Lustras EN',
                    'nosaukums_ru' => 'Lustras RU',
                    'apaksnos_lv' => 'Lustras',
                    'apaksnos_en' => 'Lustras EN',
                    'apaksnos_ru' => 'Lustras RU',
                    'apraksts_lv' => 'Lustras',
                    'apraksts_en' => 'Lustras EN',
                    'apraksts_ru' => 'Lustras RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '7',
                    'path' => 'galerijas/IM000097.jpg',
                    'thumbnail_path' => 'galerijas/IM000097_m.jpg',
                    'nosaukums_lv' => 'Rokturi LV',
                    'nosaukums_en' => 'Rokturi EN',
                    'nosaukums_ru' => 'Rokturi RU',
                    'apaksnos_lv' => 'Rokturi',
                    'apaksnos_en' => 'Rokturi EN',
                    'apaksnos_ru' => 'Rokturi RU',
                    'apraksts_lv' => 'Rokturi',
                    'apraksts_en' => 'Rokturi EN',
                    'apraksts_ru' => 'Rokturi RU',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '100',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Tukšs',
                    'nosaukums_en' => 'Tukšs',
                    'nosaukums_ru' => 'Tukšs',
                    'apaksnos_lv' => 'Tukšs',
                    'apaksnos_en' => 'Tukšs',
                    'apaksnos_ru' => 'Tukšs',
                    'apraksts_lv' => 'Tukšs',
                    'apraksts_en' => 'Tukšs',
                    'apraksts_ru' => 'Tukšs',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]


            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
