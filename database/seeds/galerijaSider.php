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
                    'id' => '2',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Dekori',
                    'nosaukums_en' => 'Decors',
                    'nosaukums_ru' => 'Декор',
                    'apaksnos_lv' => 'Dārza dekori, kamīni, puķu kastes',
                    'apaksnos_en' => 'Garden decor, fireplaces, flower boxes',
                    'apaksnos_ru' => 'Садовый декор, камины, цветочные ящики',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '3',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Kāpnes',
                    'nosaukums_en' => 'Stairs',
                    'nosaukums_ru' => 'Лестница',
                    'apaksnos_lv' => 'Kāpnes margas, balkoni',
                    'apaksnos_en' => 'Stairs, railings, balconies',
                    'apaksnos_ru' => 'Лестницы, перила, балконы',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '4',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Restaurācija',
                    'nosaukums_en' => 'Restoration',
                    'nosaukums_ru' => 'Pеставрация',
                    'apaksnos_lv' => 'Atjaunojasm un restaurējam senlietas',
                    'apaksnos_en' => 'Restoration and restoration of antiques',
                    'apaksnos_ru' => 'Восстановление и восстановление антиквариата',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '5',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Terases',
                    'nosaukums_en' => 'Terraces',
                    'nosaukums_ru' => 'Tеррасы',
                    'apaksnos_lv' => '',
                    'apaksnos_en' => '',
                    'apaksnos_ru' => '',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '6',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Vārti un žogi',
                    'nosaukums_en' => 'Gates and fences',
                    'nosaukums_ru' => 'Ворота и заборы',
                    'apaksnos_lv' => 'Skaisti un droši',
                    'apaksnos_en' => 'Beautiful and safe',
                    'apaksnos_ru' => 'Красиво и безопасо',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '7',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Skices',
                    'nosaukums_en' => 'Sketches',
                    'nosaukums_ru' => 'Эскизы',
                    'apaksnos_lv' => 'Kā viss sākas ...',
                    'apaksnos_en' => 'How it all starts ...',
                    'apaksnos_ru' => 'Как все начинается ...',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'id' => '1',
                    'path' => '',
                    'thumbnail_path' => '',
                    'nosaukums_lv' => 'Bez galerijas',
                    'nosaukums_en' => 'Bez galerijas',
                    'nosaukums_ru' => 'Bez galerijas',
                    'apaksnos_lv' => 'Bez galerijas',
                    'apaksnos_en' => 'Bez galerijas',
                    'apaksnos_ru' => 'Bez galerijas',
                    'apraksts_lv' => '',
                    'apraksts_en' => '',
                    'apraksts_ru' => '',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]


            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
