<?php

use Illuminate\Database\Seeder;

class kategorsSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('kategors')->get()->count() == 0){

            DB::table('kategors')->insert([

                [
                    'nosaukums_lv' => 'Trepes',
                    'nosaukums_en' => 'Stairs',
                    'nosaukums_ru' => 'Лестница',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Terases',
                    'nosaukums_en' => 'Terraces',
                    'nosaukums_ru' => 'Террасы',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => 'Dārza dekori',
                    'nosaukums_en' => 'Gardens decors',
                    'nosaukums_ru' => 'Декоры сада',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'nosaukums_lv' => ' Vārti un žogi',
                    'nosaukums_en' => 'Gates and fences',
                    'nosaukums_ru' => ' Ворота и заборы',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
