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
                    'path' => 'galerijas/IM000018.jpg',
                    'thumbnail_path' => 'galerijas/IM000018_m.jpg',
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
                    'thumbnail_path' => 'galerijas/IM000003_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 1,
                    'path' => 'galerijas/IM000004.jpg',
                    'thumbnail_path' => 'galerijas/IM000004_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 2,
                    'path' => 'galerijas/IM000006.jpg',
                    'thumbnail_path' => 'galerijas/IM000006_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 3,
                    'path' => 'galerijas/IM000014.jpg',
                    'thumbnail_path' => 'galerijas/IM000014.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 4,
                    'path' => 'galerijas/IM000008.jpg',
                    'thumbnail_path' => 'galerijas/IM000008_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 5,
                    'path' => 'galerijas/IM000011.jpg',
                    'thumbnail_path' => 'galerijas/IM000011_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 6,
                    'path' => 'galerijas/IM000012.jpg',
                    'thumbnail_path' => 'galerijas/IM000012_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'galerija_id' => 6,
                    'path' => 'galerijas/IM000013.jpg',
                    'thumbnail_path' => 'galerijas/IM000013_m.jpg',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]

            ]);

        } else { echo "\e[31mTable is not empty, therefore NOT \n"; }
    }
}
