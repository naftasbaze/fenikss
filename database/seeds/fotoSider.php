<?php

use Illuminate\Database\Seeder;

class fotoSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('fotos')->get()->count() == 0){

            DB::table('fotos')->insert([

                [
                    'galerija_id' => 1,
                    'path' => 'galerijas/142.JPG',
                    'thumbnail_path' => 'galerijas/142.JPG',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 1,
                    'path' => 'galerijas/IM000001.jpg',
                    'thumbnail_path' => 'galerijas/IM000001_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 1,
                    'path' => 'galerijas/IM000003.jpg',
                    'thumbnail_path' => 'galerijas/IM000001_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 1,
                    'path' => 'galerijas/IM000004.jpg',
                    'thumbnail_path' => 'galerijas/IM000004_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT \n"; }
    }
}
